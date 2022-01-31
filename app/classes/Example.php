<?php


namespace App\classes;


class Example
{
    public $student = [];

    public function index()
    {
        $this->student = [
            0=>[
                'name'=>'jahid',
                'email'=>'jahid@gmail.com',
                'mobile'=>[
                    'mobile1' =>'0122333',
                    'mobile2' =>'54566655'
                ]
            ],
            1=>[
                'name'=>'fahim',
                'email'=>'fahim@gmail.com',
                'mobile'=>[
                    'mobile1' =>'07122333',
                    'mobile2' =>'44566655'
                ]
            ],
            2=>'BITM',
            3=>[
                'name'=>'shabuddin',
                'email'=>'shabuddin@gmail.com',
                'mobile'=>
                [
                    'mobile1' =>'03122333',
                    'mobile2' =>'84566655'
                ]
            ]

        ];

        echo '<pre>';
//        print_r($this->student);

//        var_dump($this->student);






//        foreach ($this->student as $key=> $item)
//        {
//            if(is_array($item))
//            {
//                foreach ($item as $value)
//                {
//                    if(is_array($value))
//                    {
//                       foreach ($value as $v_value)
//                        {
//                            echo $v_value.' ';
//                        }
//                    }
//                    else{
//                        echo $value.' ';
//                    }
//                }
//            }
//            else
//            {
//                echo $item;
//            }
//
//            echo '<br/>';
//        }

//    foreach ($this->student as $key=> $item)
//    {
//        if($key==0)
//        {
//            echo $item['name'].'<br/>'.$item['email'].'<br/>'.$item['mobile'].'<br/>';
//            break;
//        }
//
//    }


//        echo $this->student[0]['email'];



//        $this->student = [10,20,'BITM',10.20,true,false];
//        //echo $this->student[6];
//        foreach ($this->student as $index=> $value)
//        {
//            echo 'index no'.$index.' value- ' .$value.'</br>';
//        }
    }
}