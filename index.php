<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 
    
    $pic = rand(1,6);  // এখানে যত গুলো ছবি রেন্ডম ভাবে দেখাতে চাওয়া হবে তার একটা ডিউরেশন দিতে হবে । 
    
    if($pic == 1){      // যদি রেন্ডম নাম্বার ১ আসে তাহলে কি দেখাবে তা নির্ধারণ করে নিচের প্রিন্ট এর মাধ্যমে দিতে হবে । 
        
        print '<img src = "https://www.curryflow.com/wp-content/uploads/2020/06/photo-1542038784456-1ea8e935640e.jpg"';

    }if($pic == 2){     // যদি রেন্ডম নাম্বার ২ আসে তাহলে কি দেখাবে তা নির্ধারণ করে নিচের প্রিন্ট এর মাধ্যমে দিতে হবে । 
        
        print '<img src = "https://images.news18.com/ibnlive/uploads/2021/07/1627377451_nature-1600x900.jpg"';
        
    }if($pic == 3){     // যদি রেন্ডম নাম্বার ৩ আসে তাহলে কি দেখাবে তা নির্ধারণ করে নিচের প্রিন্ট এর মাধ্যমে দিতে হবে । 
        print '<img src = "https://www.paperlessmovement.com/wp-content/uploads/2019/09/o2dvsv2pnhe.jpg"';
    }
    if($pic == 4){      // যদি রেন্ডম নাম্বার ৪ আসে তাহলে কি দেখাবে তা নির্ধারণ করে নিচের প্রিন্ট এর মাধ্যমে দিতে হবে । 
        print '<img src = "02.jpg"';
    }
    if($pic == 5){      // যদি রেন্ডম নাম্বার ৫ আসে তাহলে কি দেখাবে তা নির্ধারণ করে নিচের প্রিন্ট এর মাধ্যমে দিতে হবে । 
        print '<img src = "01.jpg"';
    }
    if($pic == 6){      // যদি রেন্ডম নাম্বার ৬ আসে তাহলে কি দেখাবে তা নির্ধারণ করে নিচের প্রিন্ট এর মাধ্যমে দিতে হবে । 
        print '<img src = "03.jpg"';
    }
    

    
    ?>






</body>

</html>