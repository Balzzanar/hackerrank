# Hacker Rank
Code done for Hacker Rank. 
* https://www.hackerrank.com

### Running the tests
```bash
cat AngryProfessor_Test | php AngryProfessor.php
```

### Default setup of I/O and logging
```php
class Logger{public function Log($tolog){}}
#require_once("../Algorithms/Logger.php");
define("LOGGING", false);
$logger = new Logger;
```