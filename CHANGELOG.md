# Change Log

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [Open]

* add example for filter usage
* add documentation for filter usage
* extend unit tests
* implement \_\_clone();
* implement usage of filter in writer::copy
* write documentation
* write adapter to easy up migration from [EasyCsv - 0.0.2](https://github.com/jwage/easy-csv/tree/0.0.2/lib/EasyCSV) to this component

### To Add

### To Change

## [Unreleased]

### Changed

* dropped support for php version below 5.6
* moved release history into changelog
* replaced deprecated array syntax "array()" with "[]"

## [1.5.14](https://github.com/bazzline/php_component_csv/tree/1.5.14) - released at 30.05.2016

### Changed

* relaxed dependency for mockery

## [1.5.13](https://github.com/bazzline/php_component_csv/tree/1.5.13) - released at 16.03.2016

### Changed

* updated dependency

## [1.5.12](https://github.com/bazzline/php_component_csv/tree/1.5.12) - released at 22.02.2016

### Changed

* moved to psr-4 autoloading
* removed build status from scrutinizer section
* updated depencenies

## [1.5.11](https://github.com/bazzline/php_component_csv/tree/1.5.11) - released at 20.01.2016

### Changed

* updated depencenies

## [1.5.10](https://github.com/bazzline/php_component_csv/tree/1.5.10) - released at 12.01.2016

### Changed

* fixed dependency handling for phpunit 4.8.*

## [1.5.9](https://github.com/bazzline/php_component_csv/tree/1.5.9) - released at 11.12.2015

### Changed

* updated dependencies

## [1.5.8](https://github.com/bazzline/php_component_csv/tree/1.5.8) - released at 08.11.2015

### Changed

* updated dependencies

## [1.5.7](https://github.com/bazzline/php_component_csv/tree/1.5.7) - released at 07.10.2015

### Changed

* updated dependencies

## [1.5.6](https://github.com/bazzline/php_component_csv/tree/1.5.6) - released at 10.09.2015

### Changed

* relaxed dependencies

## [1.5.5](https://github.com/bazzline/php_component_csv/tree/1.5.5) - released at 10.09.2015

### Changed

* relaxed dependencies

## [1.5.4](https://github.com/bazzline/php_component_csv/tree/1.5.4) - released at 09.09.2015

### Added

* added `BaseInterface`, `ReaderInterface` and `WriterInterface`

## [1.5.3](https://github.com/bazzline/php_component_csv/tree/1.5.3) - released at 26.08.2015

### Changed

* updated dependencies

## [1.5.2](https://github.com/bazzline/php_component_csv/tree/1.5.2) - released at 06.07.2015

### Changed

* refactored [cli](https://github.com/bazzline/php_component_csv/blob/master/example/cli) example by using [php_component_cli_readline](https://github.com/bazzline/php_component_cli_readline)

## [1.5.1](https://github.com/bazzline/php_component_csv/tree/1.5.1) - released at 04.07.2015

### Changed

* updated dependency

## [1.5.0](https://github.com/bazzline/php_component_csv/tree/1.5.0) - released at 02.07.2015

### Added

* added dependency to [generic agreement](https://github.com/bazzline/php_component_generic_agreement)

### Changed

* replaced own [FilterInterface](https://github.com/bazzline/php_component_csv/blob/1.4.0/source/Net/Bazzline/Component/Csv/Filter/FilterInterface.php) with external [FilterInterface](https://github.com/bazzline/php_component_generic_agreement/blob/master/source/Net/Bazzline/Component/GenericAgreement/Data/FilterableInterface.php)

## [1.4.0](https://github.com/bazzline/php_component_csv/tree/1.4.0) - released at 02.07.2015

### Added

* started [cli](https://github.com/bazzline/php_component_csv/blob/master/example/cli) example to easy up usage
* added "rewind" call when using reader::readAll() and reader::readMany()

## [1.3.0](https://github.com/bazzline/php_component_csv/tree/1.3.0) - released at 26.06.2015

### Added


* added headline output support as keys for Reader::readMany()
* added headline output support as keys for Reader::readOne()
* can be disabled by Reader::disableAddHeadlineToOutput()
* can be enabled by Reader::enableAddHeadlineToOutput()
* is enabled by default

### Changed

* fixed broken unit test for php 5.3
* moved complex array combine into [own project](https://github.com/bazzline/php_component_toolbox/blob/master/source/Net/Bazzline/Component/Toolbox/HashMap/Combine.php)
* removed duplicated code in Reader

## [1.2.0](https://github.com/bazzline/php_component_csv/tree/1.2.0) - released at 25.06.2015

### Added

* added examples ([benchmarkReader](https://github.com/bazzline/php_component_csv/blob/master/example/benchmarkReader), [benchmarkWriter](https://github.com/bazzline/php_component_csv/blob/master/example/benchmarkWriter), [reader](https://github.com/bazzline/php_component_csv/blob/master/example/reader) and [writer](https://github.com/bazzline/php_component_csv/blob/master/example/writer))
* implemented filter for reader and writer by creating the [FilterInterface](https://github.com/bazzline/php_component_csv/blob/1.2.0/source/Net/Bazzline/Component/Csv/Filter/FilterInterface.php)

## [1.1.0](https://github.com/bazzline/php_component_csv/tree/1.1.0) - released at 10.06.2015

### Added

* added link to api
* added minimum php version requirement
* implemented "move($path)" method into [Writer](https://github.com/bazzline/php_component_csv/blob/master/source/Net/Bazzline/Component/Csv/Writer/Writer.php)

### Changed

* removed "TODO"
* updated dependencies

## [1.0.0](https://github.com/bazzline/php_component_csv/tree/1.0.0) - released at 07.06.2015

### Added

* initial release