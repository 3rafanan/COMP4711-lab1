<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<h1>COMP4711 Lab 1</h1>";

        include('student.php');

        $students = array();

        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

        $myself = new Student();
        $myself->surname = "Rafanan";
        $myself->first_name = "Marc";
        $myself->add_email('bcit', 'mrafanan@my.bcit.ca');
        $myself->add_grade(88);
        $myself->add_grade(88);
        $myself->add_grade(90);
        $myself->add_grade(72);
        $students['a008'] = $myself;

        ksort($students);

        echo "<pre><b>Student Name\t\t\tAverage\t\t\tEmail Address\n</b></pre>";
        echo "<pre>_______________________________________________________________________________________</pre>";
        foreach($students as $student) {
            $line = $student->surname . ' ' . $student->first_name . "\t\t\t";
            $line .= $student->average() . "\t\t\t";
            $first_flag = 1;
            foreach ($student->emails as $which => $what){
                if($first_flag == 1) {
                    $line .= $which . ":\t " . $what . "\n";
                    $first_flag = 0;
                }
                else {
                    $line .= "\t\t\t\t\t\t\t" . $which . ":\t " . $what . "\n";
                }
            }
            $line .= "---------------------------------------------------------------------------------------";
            echo "<pre>$line</pre>";

        }
        ?>
    </body>
</html>
