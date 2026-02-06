<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT223 - Advanced Database Systems - SQL Functions</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        
        header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 3px solid #2c3e50;
        }
        
        h1 {
            color: #2c3e50;
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        
        .subtitle {
            color: #7f8c8d;
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        
        .category {
            margin-bottom: 40px;
        }
        
        h2 {
            color: #3498db;
            padding: 15px;
            background: #ecf0f1;
            border-radius: 5px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .function-count {
            background: #3498db;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9em;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        
        th {
            background: #34495e;
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 600;
        }
        
        td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
            vertical-align: top;
        }
        
        tr:nth-child(even) {
            background: #f8f9fa;
        }
        
        tr:hover {
            background: #e8f4fc;
        }
        
        .sql-code {
            font-family: 'Courier New', monospace;
            background: #2c3e50;
            color: #ecf0f1;
            padding: 10px;
            border-radius: 5px;
            font-size: 0.9em;
            white-space: pre-wrap;
            word-break: break-all;
        }
        
        .view-link {
            display: inline-block;
            background: #27ae60;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 500;
            transition: background 0.3s;
        }
        
        .view-link:hover {
            background: #219653;
        }
        
        footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 2px solid #eee;
            color: #7f8c8d;
        }
        
        .download-btn {
            display: inline-block;
            background: #9b59b6;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 500;
            margin: 10px;
            transition: background 0.3s;
        }
        
        .download-btn:hover {
            background: #8e44ad;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>IT223 - Advanced Database Systems</h1>
            <div class="subtitle">TASK 3: Apply SQL Functions in Actual SQL Code</div>
            <p>Demonstration of SQL Functions using MySQL and PHP</p>
        </header>

        <div class="category">
            <h2>String Functions <span class="function-count">33 Functions</span></h2>
            <table>
                <thead>
                    <tr>
                        <th width="200">SQL Function</th>
                        <th width="300">Description</th>
                        <th>Example Code</th>
                        <th width="120">Example Output</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stringFunctions = [
                        ['UPPER', 'Converts string to uppercase', "SELECT UPPER(first_name) as UpperName FROM students LIMIT 5"],
                        ['LOWER', 'Converts string to lowercase', "SELECT LOWER(last_name) as LowerName FROM students LIMIT 5"],
                        ['CONCAT', 'Concatenates two or more strings', "SELECT CONCAT(first_name, ' ', last_name) as FullName FROM students LIMIT 5"],
                        ['SUBSTRING', 'Extracts substring from a string', "SELECT SUBSTRING(first_name, 1, 3) as FirstThree FROM students LIMIT 5"],
                        ['CHAR_LENGTH', 'Returns length of string', "SELECT first_name, CHAR_LENGTH(first_name) as NameLength FROM students LIMIT 5"],
                        ['TRIM', 'Removes leading/trailing spaces', "SELECT TRIM('   Hello World   ') as Trimmed"],
                        ['LTRIM', 'Removes leading spaces', "SELECT LTRIM('   Hello World') as LeftTrimmed"],
                        ['RTRIM', 'Removes trailing spaces', "SELECT RTRIM('Hello World   ') as RightTrimmed"],
                        ['REPLACE', 'Replaces occurrences of substring', "SELECT REPLACE(email, '@email.com', '@university.edu') as NewEmail FROM students LIMIT 5"],
                        ['REVERSE', 'Reverses a string', "SELECT REVERSE(first_name) as ReversedName FROM students LIMIT 5"],
                        ['LEFT', 'Extracts left part of string', "SELECT LEFT(first_name, 2) as FirstTwo FROM students LIMIT 5"],
                        ['RIGHT', 'Extracts right part of string', "SELECT RIGHT(last_name, 3) as LastThree FROM students LIMIT 5"],
                        ['LOCATE', 'Returns position of substring', "SELECT LOCATE('@', email) as AtPosition FROM students LIMIT 5"],
                        ['POSITION', 'Returns position of substring', "SELECT POSITION('a' IN first_name) as APosition FROM students LIMIT 5"],
                        ['INSERT', 'Inserts substring into string', "SELECT INSERT(email, 1, 0, 'student-') as ModifiedEmail FROM students LIMIT 5"],
                        ['REPEAT', 'Repeats a string', "SELECT REPEAT('*', 5) as Stars"],
                        ['SPACE', 'Returns string of spaces', "SELECT CONCAT(first_name, SPACE(2), last_name) as SpacedName FROM students LIMIT 5"],
                        ['STRCMP', 'Compares two strings', "SELECT STRCMP(first_name, 'John') as Comparison FROM students LIMIT 5"],
                        ['ASCII', 'Returns ASCII value of character', "SELECT ASCII(SUBSTRING(first_name, 1, 1)) as FirstCharCode FROM students LIMIT 5"],
                        ['CHAR', 'Returns character from ASCII code', "SELECT CHAR(65) as CharA"],
                        ['LCASE', 'Converts to lowercase (alias LOWER)', "SELECT LCASE(first_name) as LowerName FROM students LIMIT 5"],
                        ['UCASE', 'Converts to uppercase (alias UPPER)', "SELECT UCASE(last_name) as UpperName FROM students LIMIT 5"],
                        ['MID', 'Extracts substring (alias SUBSTRING)', "SELECT MID(first_name, 2, 3) as MiddlePart FROM students LIMIT 5"],
                        ['INSTR', 'Returns position of substring', "SELECT INSTR(first_name, 'a') as AInName FROM students LIMIT 5"],
                        ['LPAD', 'Left-pads string to specified length', "SELECT LPAD(gpa, 6, '0') as PaddedGPA FROM students LIMIT 5"],
                        ['RPAD', 'Right-pads string to specified length', "SELECT RPAD(first_name, 10, '.') as PaddedName FROM students LIMIT 5"],
                        ['FIELD', 'Returns index position of value', "SELECT FIELD(department, 'Computer Science', 'Mathematics', 'English') as DeptIndex FROM courses LIMIT 5"],
                        ['FIND_IN_SET', 'Returns position in comma list', "SELECT FIND_IN_SET('Computer Science', 'Computer Science,Mathematics,English') as Position"],
                        ['FORMAT', 'Formats number with commas', "SELECT FORMAT(annual_fee, 2) as FormattedFee FROM students LIMIT 5"],
                        ['HEX', 'Returns hex value', "SELECT HEX(65) as HexValue"],
                        ['UNHEX', 'Converts hex to characters', "SELECT UNHEX('41') as CharFromHex"],
                        ['SOUNDEX', 'Returns soundex code', "SELECT SOUNDEX(first_name), first_name FROM students LIMIT 5"],
                        ['SUBSTRING_INDEX', 'Returns substring before delimiter', "SELECT SUBSTRING_INDEX(email, '@', 1) as Username FROM students LIMIT 5"]
                    ];
                    
                    $counter = 1;
                    foreach ($stringFunctions as $function) {
                        echo "<tr>";
                        echo "<td><strong>{$function[0]}</strong></td>";
                        echo "<td>{$function[1]}</td>";
                        echo "<td><div class='sql-code'>{$function[2]}</div></td>";
                        echo "<td><a href='string_functions.php?func={$counter}' class='view-link'>View Output</a></td>";
                        echo "</tr>";
                        $counter++;
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="category">
            <h2>Numeric Functions <span class="function-count">36 Functions</span></h2>
            <table>
                <thead>
                    <tr>
                        <th width="200">SQL Function</th>
                        <th width="300">Description</th>
                        <th>Example Code</th>
                        <th width="120">Example Output</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $numericFunctions = [
                        ['ABS', 'Returns absolute value', "SELECT ABS(-123.45) as AbsoluteValue"],
                        ['ROUND', 'Rounds number to specified decimal', "SELECT ROUND(gpa, 1) as RoundedGPA FROM students LIMIT 5"],
                        ['CEIL', 'Returns smallest integer >= value', "SELECT CEIL(gpa) as CeilingGPA FROM students LIMIT 5"],
                        ['FLOOR', 'Returns largest integer <= value', "SELECT FLOOR(gpa) as FloorGPA FROM students LIMIT 5"],
                        ['MOD', 'Returns remainder of division', "SELECT MOD(credits_earned, 3) as Remainder FROM students LIMIT 5"],
                        ['POW', 'Returns value raised to power', "SELECT POW(2, 3) as PowerResult"],
                        ['SQRT', 'Returns square root', "SELECT SQRT(annual_fee) as FeeSqrt FROM students LIMIT 5"],
                        ['RAND', 'Returns random number', "SELECT RAND() as RandomNumber"],
                        ['TRUNCATE', 'Truncates number to decimals', "SELECT TRUNCATE(gpa, 0) as TruncatedGPA FROM students LIMIT 5"],
                        ['SIGN', 'Returns sign of number', "SELECT SIGN(gpa - 3.5) as GPASign FROM students LIMIT 5"],
                        ['EXP', 'Returns e raised to power', "SELECT EXP(1) as EValue"],
                        ['LN', 'Returns natural logarithm', "SELECT LN(annual_fee) as LogFee FROM students LIMIT 5"],
                        ['LOG', 'Returns logarithm', "SELECT LOG(annual_fee) as Log10Fee FROM students LIMIT 5"],
                        ['LOG2', 'Returns base-2 logarithm', "SELECT LOG2(credits_earned) as Log2Credits FROM students LIMIT 5"],
                        ['LOG10', 'Returns base-10 logarithm', "SELECT LOG10(annual_fee) as Log10Fee FROM students LIMIT 5"],
                        ['PI', 'Returns PI value', "SELECT PI() as PiValue"],
                        ['SIN', 'Returns sine of angle', "SELECT SIN(1) as SineValue"],
                        ['COS', 'Returns cosine of angle', "SELECT COS(1) as CosineValue"],
                        ['TAN', 'Returns tangent of angle', "SELECT TAN(1) as TangentValue"],
                        ['ASIN', 'Returns arc sine', "SELECT ASIN(0.5) as ArcSine"],
                        ['ACOS', 'Returns arc cosine', "SELECT ACOS(0.5) as ArcCosine"],
                        ['ATAN', 'Returns arc tangent', "SELECT ATAN(1) as ArcTangent"],
                        ['ATAN2', 'Returns arc tangent of two numbers', "SELECT ATAN2(1, 2) as ArcTangent2"],
                        ['COT', 'Returns cotangent', "SELECT COT(1) as Cotangent"],
                        ['DEGREES', 'Converts radians to degrees', "SELECT DEGREES(1) as DegreesValue"],
                        ['RADIANS', 'Converts degrees to radians', "SELECT RADIANS(180) as RadiansValue"],
                        ['POWER', 'Returns value raised to power', "SELECT POWER(2, 4) as PowerResult"],
                        ['GREATEST', 'Returns greatest value', "SELECT GREATEST(gpa, 3.0, 2.5) as GreatestValue FROM students LIMIT 5"],
                        ['LEAST', 'Returns smallest value', "SELECT LEAST(gpa, 4.0, 3.0) as LeastValue FROM students LIMIT 5"],
                        ['BIN', 'Returns binary representation', "SELECT BIN(10) as BinaryValue"],
                        ['OCT', 'Returns octal representation', "SELECT OCT(10) as OctalValue"],
                        ['HEX', 'Returns hexadecimal value', "SELECT HEX(255) as HexValue"],
                        ['CONV', 'Converts between number bases', "SELECT CONV('A', 16, 10) as DecimalValue"],
                        ['BIT_COUNT', 'Returns number of set bits', "SELECT BIT_COUNT(10) as BitCount"],
                        ['CRC32', 'Returns CRC32 value', "SELECT CRC32(first_name) as NameCRC FROM students LIMIT 5"],
                        ['DIV', 'Integer division', "SELECT credits_earned DIV 15 as FullSemesters FROM students LIMIT 5"]
                    ];
                    
                    $counter = 1;
                    foreach ($numericFunctions as $function) {
                        echo "<tr>";
                        echo "<td><strong>{$function[0]}</strong></td>";
                        echo "<td>{$function[1]}</td>";
                        echo "<td><div class='sql-code'>{$function[2]}</div></td>";
                        echo "<td><a href='numeric_functions.php?func={$counter}' class='view-link'>View Output</a></td>";
                        echo "</tr>";
                        $counter++;
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="category">
            <h2>Date Functions <span class="function-count">50 Functions</span></h2>
            <table>
                <thead>
                    <tr>
                        <th width="200">SQL Function</th>
                        <th width="300">Description</th>
                        <th>Example Code</th>
                        <th width="120">Example Output</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $dateFunctions = [
                        ['NOW', 'Current date and time', "SELECT NOW() as CurrentDateTime"],
                        ['CURDATE', 'Current date', "SELECT CURDATE() as CurrentDate"],
                        ['CURTIME', 'Current time', "SELECT CURTIME() as CurrentTime"],
                        ['DATE', 'Extracts date part', "SELECT DATE(enrollment_date) as EnrollmentDate FROM students LIMIT 5"],
                        ['TIME', 'Extracts time part', "SELECT TIME(enrollment_date) as EnrollmentTime FROM students LIMIT 5"],
                        ['YEAR', 'Extracts year', "SELECT YEAR(birth_date) as BirthYear FROM students LIMIT 5"],
                        ['MONTH', 'Extracts month', "SELECT MONTH(birth_date) as BirthMonth FROM students LIMIT 5"],
                        ['DAY', 'Extracts day', "SELECT DAY(birth_date) as BirthDay FROM students LIMIT 5"],
                        ['HOUR', 'Extracts hour', "SELECT HOUR(enrollment_date) as EnrollmentHour FROM students LIMIT 5"],
                        ['MINUTE', 'Extracts minute', "SELECT MINUTE(enrollment_date) as EnrollmentMinute FROM students LIMIT 5"],
                        ['SECOND', 'Extracts second', "SELECT SECOND(enrollment_date) as EnrollmentSecond FROM students LIMIT 5"],
                        ['DAYNAME', 'Returns day name', "SELECT DAYNAME(birth_date) as BirthDayName FROM students LIMIT 5"],
                        ['MONTHNAME', 'Returns month name', "SELECT MONTHNAME(birth_date) as BirthMonthName FROM students LIMIT 5"],
                        ['EXTRACT', 'Extracts date part', "SELECT EXTRACT(YEAR FROM birth_date) as Year FROM students LIMIT 5"],
                        ['DATE_ADD', 'Adds time interval', "SELECT DATE_ADD(birth_date, INTERVAL 18 YEAR) as AdultDate FROM students LIMIT 5"],
                        ['DATE_SUB', 'Subtracts time interval', "SELECT DATE_SUB(NOW(), INTERVAL 1 MONTH) as OneMonthAgo"],
                        ['DATEDIFF', 'Difference between dates', "SELECT DATEDIFF(NOW(), birth_date)/365 as ApproxAge FROM students LIMIT 5"],
                        ['TIMEDIFF', 'Difference between times', "SELECT TIMEDIFF(NOW(), enrollment_date) as TimeSinceEnrollment FROM students LIMIT 5"],
                        ['TIMESTAMPDIFF', 'Difference in specified unit', "SELECT TIMESTAMPDIFF(YEAR, birth_date, NOW()) as Age FROM students LIMIT 5"],
                        ['DATE_FORMAT', 'Formats date', "SELECT DATE_FORMAT(birth_date, '%M %d, %Y') as FormattedDate FROM students LIMIT 5"],
                        ['STR_TO_DATE', 'Converts string to date', "SELECT STR_TO_DATE('2024-01-15', '%Y-%m-%d') as StringToDate"],
                        ['LAST_DAY', 'Last day of month', "SELECT LAST_DAY(birth_date) as MonthEnd FROM students LIMIT 5"],
                        ['MAKEDATE', 'Creates date from year and day', "SELECT MAKEDATE(2024, 32) as MadeDate"],
                        ['MAKETIME', 'Creates time from hour/min/sec', "SELECT MAKETIME(14, 30, 0) as MadeTime"],
                        ['QUARTER', 'Returns quarter of year', "SELECT QUARTER(birth_date) as BirthQuarter FROM students LIMIT 5"],
                        ['WEEK', 'Week number of year', "SELECT WEEK(birth_date) as BirthWeek FROM students LIMIT 5"],
                        ['WEEKDAY', 'Weekday index (0=Monday)', "SELECT WEEKDAY(birth_date) as WeekdayIndex FROM students LIMIT 5"],
                        ['WEEKOFYEAR', 'Week number (1-53)', "SELECT WEEKOFYEAR(birth_date) as WeekOfYear FROM students LIMIT 5"],
                        ['YEARWEEK', 'Year and week', "SELECT YEARWEEK(birth_date) as YearWeek FROM students LIMIT 5"],
                        ['ADDDATE', 'Adds to date (alias DATE_ADD)', "SELECT ADDDATE(birth_date, INTERVAL 1 MONTH) as NextMonth FROM students LIMIT 5"],
                        ['SUBDATE', 'Subtracts from date', "SELECT SUBDATE(birth_date, INTERVAL 1 YEAR) as PreviousYear FROM students LIMIT 5"],
                        ['ADDTIME', 'Adds time', "SELECT ADDTIME(enrollment_date, '02:00:00') as TwoHoursLater FROM students LIMIT 5"],
                        ['SUBTIME', 'Subtracts time', "SELECT SUBTIME(enrollment_date, '01:30:00') as EarlierTime FROM students LIMIT 5"],
                        ['CONVERT_TZ', 'Converts timezone', "SELECT CONVERT_TZ(NOW(), '+00:00', '+08:00') as ManilaTime"],
                        ['FROM_DAYS', 'Converts day number to date', "SELECT FROM_DAYS(738000) as DateFromDays"],
                        ['FROM_UNIXTIME', 'Converts Unix timestamp', "SELECT FROM_UNIXTIME(1672531200) as UnixTime"],
                        ['SEC_TO_TIME', 'Seconds to time', "SELECT SEC_TO_TIME(3661) as SecondsToTime"],
                        ['TIME_TO_SEC', 'Time to seconds', "SELECT TIME_TO_SEC('01:01:01') as TimeToSeconds"],
                        ['TO_DAYS', 'Converts date to day number', "SELECT TO_DAYS(birth_date) as DaysFromZero FROM students LIMIT 5"],
                        ['TO_SECONDS', 'Converts to seconds', "SELECT TO_SECONDS(birth_date) as BirthSeconds FROM students LIMIT 5"],
                        ['UNIX_TIMESTAMP', 'Unix timestamp', "SELECT UNIX_TIMESTAMP(birth_date) as UnixBirth FROM students LIMIT 5"],
                        ['UTC_DATE', 'UTC date', "SELECT UTC_DATE() as UTCDate"],
                        ['UTC_TIME', 'UTC time', "SELECT UTC_TIME() as UTCTime"],
                        ['UTC_TIMESTAMP', 'UTC timestamp', "SELECT UTC_TIMESTAMP() as UTCTimestamp"],
                        ['SYSDATE', 'System date and time', "SELECT SYSDATE() as SystemDate"],
                        ['CURRENT_DATE', 'Current date', "SELECT CURRENT_DATE() as CurrentDate"],
                        ['CURRENT_TIME', 'Current time', "SELECT CURRENT_TIME() as CurrentTime"],
                        ['CURRENT_TIMESTAMP', 'Current timestamp', "SELECT CURRENT_TIMESTAMP() as CurrentTimestamp"],
                        ['LOCALTIME', 'Local time', "SELECT LOCALTIME() as LocalTime"],
                        ['LOCALTIMESTAMP', 'Local timestamp', "SELECT LOCALTIMESTAMP() as LocalTimestamp"]
                    ];
                    
                    $counter = 1;
                    foreach ($dateFunctions as $function) {
                        echo "<tr>";
                        echo "<td><strong>{$function[0]}</strong></td>";
                        echo "<td>{$function[1]}</td>";
                        echo "<td><div class='sql-code'>{$function[2]}</div></td>";
                        echo "<td><a href='date_functions.php?func={$counter}' class='view-link'>View Output</a></td>";
                        echo "</tr>";
                        $counter++;
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="category">
            <h2>Advanced Functions <span class="function-count">19 Functions</span></h2>
            <table>
                <thead>
                    <tr>
                        <th width="200">SQL Function</th>
                        <th width="300">Description</th>
                        <th>Example Code</th>
                        <th width="120">Example Output</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $advancedFunctions = [
                        ['IF', 'Returns value if true, else other', "SELECT first_name, gpa, IF(gpa >= 3.5, 'Honors', 'Regular') as Status FROM students LIMIT 5"],
                        ['IFNULL', 'Returns second if first is NULL', "SELECT IFNULL(NULL, 'Default Value') as IfNullTest"],
                        ['NULLIF', 'Returns NULL if two values equal', "SELECT NULLIF(gpa, 3.75) as NullIfEqual FROM students LIMIT 5"],
                        ['COALESCE', 'Returns first non-NULL value', "SELECT COALESCE(NULL, NULL, 'Third Value', 'Fourth') as CoalesceTest"],
                        ['CASE', 'Conditional logic', "SELECT first_name, gpa, CASE WHEN gpa >= 3.8 THEN 'A+' WHEN gpa >= 3.5 THEN 'A' ELSE 'B+' END as Grade FROM students LIMIT 5"],
                        ['CAST', 'Converts value to specified type', "SELECT CAST(gpa AS DECIMAL(5,2)) as CastedGPA FROM students LIMIT 5"],
                        ['CONVERT', 'Converts value to specified type', "SELECT CONVERT(gpa, CHAR) as StringGPA FROM students LIMIT 5"],
                        ['USER', 'Current user name', "SELECT USER() as CurrentUser"],
                        ['DATABASE', 'Current database name', "SELECT DATABASE() as CurrentDB"],
                        ['VERSION', 'MySQL version', "SELECT VERSION() as MySQLVersion"],
                        ['LAST_INSERT_ID', 'Last auto-increment ID', "SELECT LAST_INSERT_ID() as LastID"],
                        ['ROW_COUNT', 'Number of rows affected', "SELECT ROW_COUNT() as RowCount"],
                        ['FOUND_ROWS', 'Rows returned by last query', "SELECT SQL_CALC_FOUND_ROWS * FROM students LIMIT 3; SELECT FOUND_ROWS() as TotalRows"],
                        ['GROUP_CONCAT', 'Concatenates group values', "SELECT GROUP_CONCAT(first_name ORDER BY first_name SEPARATOR ', ') as AllNames FROM students"],
                        ['JSON_OBJECT', 'Creates JSON object', "SELECT JSON_OBJECT('name', first_name, 'gpa', gpa) as StudentJSON FROM students LIMIT 3"],
                        ['JSON_ARRAY', 'Creates JSON array', "SELECT JSON_ARRAY(first_name, last_name, gpa) as StudentArray FROM students LIMIT 3"],
                        ['UUID', 'Generates UUID', "SELECT UUID() as UniqueID"],
                        ['BIN_TO_UUID', 'Converts binary to UUID', "SELECT BIN_TO_UUID(UUID_TO_BIN(UUID())) as UUIDTest"],
                        ['ISNULL', 'Tests if value is NULL', "SELECT ISNULL(gpa) as IsGPA_Null FROM students LIMIT 5"]
                    ];
                    
                    $counter = 1;
                    foreach ($advancedFunctions as $function) {
                        echo "<tr>";
                        echo "<td><strong>{$function[0]}</strong></td>";
                        echo "<td>{$function[1]}</td>";
                        echo "<td><div class='sql-code'>{$function[2]}</div></td>";
                        echo "<td><a href='advanced_functions.php?func={$counter}' class='view-link'>View Output</a></td>";
                        echo "</tr>";
                        $counter++;
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <footer>
            <h3>Download Database Export</h3>
            <a href="database/university.sql" class="download-btn" download>Download SQL File</a>
            
            <div style="margin-top: 30px;">
                <p><strong>Note:</strong> Click on "View Output" links to see the actual results of each SQL function.</p>
                <p>Total Functions Demonstrated: 138</p>
            </div>
        </footer>
    </div>
</body>
</html>