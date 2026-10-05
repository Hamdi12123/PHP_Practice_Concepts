# Week 3 - PHP Conditional Statements, Arrays & Functions

This folder contains PHP practice code covering core programming concepts, including conditional checks, finding maximum/minimum values, working with multidimensional arrays, displaying data in HTML tables, and defining custom functions.

## Code Overview (`index.php`)

The script demonstrates the following PHP concepts:

1. **Conditional Statements (`if-else` & `switch`):**
   - Checks if a person is an adult or a child based on age (`$age = 20`).
   - Uses a `switch` statement to evaluate marks (`$marks = 100`) and grade them accordingly.

2. **Finding Greatest and Smallest Numbers:**
   - Compares three numbers (`$a = 15`, `$b = 42`, `$c = 7`) using conditional logic to determine and display the largest and smallest values.

3. **Multidimensional Arrays & HTML Tables:**
   - Stores user/student records (Name, Birth Year, District/Degmada, and Telephone) in a nested array.
   - Dynamically loops through the array using `foreach` and displays the information inside an HTML table with borders.

4. **Array Searching:**
   - Utilizes the `in_array()` function to search for specific elements within a multidimensional array structure.

5. **User-Defined Functions:**
   - Demonstrates how to create and invoke a basic PHP function (`sum($x, $y)`) to calculate and output the sum of two numbers.

## How to Run
1. Place this `week-3` folder inside your XAMPP `htdocs/CA2333/` directory.
2. Start Apache from the XAMPP Control Panel.
3. Open your browser and navigate to:
   ```text
   http://localhost/CA2333/week-3/index.php