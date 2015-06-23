<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2015-06-22
 */

namespace Test\Net\Bazzline\Component\Csv;

//@todo implement call of this tests with different delimiters etc. (after the
//setters are developed
//@todo implement writeOne(!array)
class FilteredWriterTest extends WriterTest
{
    public function testWriteContentLinePerLineUsingWriteOneAndAlwaysInvalidFilter()
    {
        $delimiters = $this->delimiters;

        foreach ($delimiters as $delimiter) {
            $collection         = $this->contentAsArray;
            $expectedContent    = null;
            $filter             = $this->createFilter();
            $file               = $this->createFile();
            $filesystem         = $this->createFilesystem();
            $writer             = $this->createFilteredWriter();

            $filter->shouldReceive('isValid')
                ->andReturn(false);
            $filesystem->addChild($file);

            $writer->setDelimiter($delimiter);
            $writer->setFilter($filter);
            $writer->setPath($file->url());

            foreach ($collection as $content) {
                $this->assertFalse($writer->writeOne($content));
            }

            $this->assertEquals($expectedContent, $file->getContent());
        }
    }
    public function testWriteContentLinePerLineUsingWriteOneAndPassingSecondRowAsValidFilter()
    {
        $delimiters             = $this->delimiters;
        $lineNumberOfContent    = 1;

        foreach ($delimiters as $delimiter) {
            $collection         = $this->contentAsArray;
            $expectedContent    = $this->convertArrayToStrings(array($collection[$lineNumberOfContent]), $delimiter);
            $filter             = $this->createFilter();
            $file               = $this->createFile();
            $filesystem         = $this->createFilesystem();
            $writer             = $this->createFilteredWriter();

            $filter->shouldReceive('isValid')
                ->andReturn(false, true, false, false);
            $filesystem->addChild($file);

            $writer->setDelimiter($delimiter);
            $writer->setFilter($filter);
            $writer->setPath($file->url());

            foreach ($collection as $index => $content) {
                if ($index === $lineNumberOfContent) {
                    $this->assertNotFalse($writer->writeOne($content));
                } else {
                    $this->assertFalse($writer->writeOne($content));
                }
            }

            $this->assertEquals($expectedContent, $file->getContent());
        }
    }

    /**
     * @param array $data
     * @param string $delimiter
     * @return string
     */
    private function convertArrayToStrings(array $data, $delimiter = ',')
    {
        $contains   = $this->stringContains(' ');
        $string     = '';

        foreach ($data as $contents) {

            foreach ($contents as &$part) {
                if ($contains->evaluate($part, '', true)) {
                    $part = '"' . $part . '"';
                }
            }
            $string .= implode($delimiter, $contents) . PHP_EOL;
        }

        return $string;
    }
}
