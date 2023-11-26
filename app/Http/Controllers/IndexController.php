<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    { 
        $page_title = 'Home';
        $name = 'Subrata Dey Sarker';
        $profile = 'Laravel Developer';
        $email = 'anupbca1@gmail.com';
        $phone = '+88 01771898482';
        $summary = 'I am specializes in utilizing the Laravel PHP framework to build robust and efficient web applications. Proficient in MVC architecture, they leverage features like Eloquent ORM for database interactions, Blade templating for dynamic views, and artisan command-line tools for tasks such as migrations. Skilled in RESTful API development, authentication implementation, and ensuring code quality through testing, they create scalable and secure applications. Collaborating with front-end technologies like HTML, CSS, and JavaScript, as well as frameworks like Vue.js or React, Laravel developers deliver high-quality, modern web solutions that meet client needs. Their expertise lies in writing clean, maintainable code while adhering to best practices in web development.';
        $data = [
            [
                'id'    => 1,
                'title' => 'See more ideas about Travel',
                'image' => 'post-1.jpg',
                'category' => 'Travel',
                'description' => 'Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.',
                'author' => 'Subrata Dey',
                'author_image' => 'subrata.jpg',
                'time' => '10',
            ],
            [
                'id'    => 2,
                'title' => 'See more ideas about Web Design',
                'image' => 'post-2.jpg',
                'category' => 'Web development',
                'description' => 'Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.',
                'author' => 'Morgan Freeman',
                'author_image' => 'testimonial-2.jpg',
                'time' => '30',
            ],
            [
                'id'    => 3,
                'title' => 'See more ideas about Laravel',
                'image' => 'post-3.jpg',
                'category' => 'Laravel',
                'description' => 'Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.',
                'author' => 'Kate Winslate',
                'author_image' => 'testimonial-4.jpg',
                'time' => '50',
            ],

        ];

        return view('pages.home',compact('page_title','name','profile','email','phone','summary','data'));
    }

    public function about()
    {
        $page_title = 'About Me';
        $banner_title = 'About Me';

        $experiences = [
            [
                'id'    => 1,
                'company' => 'Paramita Eye Hospital.',
                'duration' => 'January, 2021 - Continue.',
                'location' => '325, Charpara, Mymensingh.',
                'designation' => 'Manager.',
                'department' => 'Operation.',
            ],
            [
                'id'    => 2,
                'company' => 'ElpicSoft.',
                'duration' => 'May, 2019-October, 2020.',
                'location' => 'House# 23, Road# 02, Sector# 03, Uttara, Dhaka-1230.',
                'designation' => 'Laravel Developer.',
                'department' => 'IT.',
            ],
            [
                'id'    => 3,
                'company' => 'Apurba Technologies Inc.',
                'duration' => 'July, 2017-November, 2018.',
                'location' => 'House# 299, Road# 29, Mohakhali-DOHS, Dhaka-1206.',
                'designation' => 'Quality Assurance Engineer.',
                'department' => 'IT.',
            ],
            [
                'id'    => 4,
                'company' => 'HealthCare Ideas Limited (ShasthoNet).',
                'duration' => 'April 1, 2016 – May, 2017.',
                'location' => 'House# 21, Road# 24, Block-K, Banani, Dhaka-1213.',
                'designation' => 'Executive.',
                'department' => 'Sales & Marketing.',
            ],
            [
                'id'    => 5,
                'company' => 'Pacific Bangladesh Telecom Limited (Citycell).',
                'duration' => 'June, 2006 – March, 2016.',
                'location' => 'Pacific Centre` 14-Mohakhali C/A Dhaka-1212.',
                'designation' => 'Executive.',
                'department' => 'Platinum & Corporate Experience Management.',
            ],

        ];


        $data = [
            [
                'id'    => 1,
                'exam' => 'Masters of Business Administration',
                'major' => 'Human Resource Management',
                'institute' => 'Southeast University, Dhaka',
                'result' => 'CGPA:3.17 out of 4',
                'year' => '2011',
            ],
            [
                'id'    => 2,
                'exam' => 'Bachelor of computer application (BCA)',
                'major' => 'Computer Applications',
                'institute' => 'Bangalore University-INDIA ',
                'result' => 'First Class, Marks :68%',
                'year' => '2005',
            ],
            [
                'id'    => 3,
                'exam' => 'Higher Secondary School Certificate.',
                'major' => 'Science',
                'institute' => 'Adamjee Cantonment College, Dhaka.',
                'result' => 'Second Division, Marks :59%',
                'year' => '2000',
            ],
            [
                'id'    => 4,
                'exam' => 'Secondary School Certificate.',
                'major' => 'Science',
                'institute' => 'Civil Aviation High School, Dhaka.',
                'result' => 'First Division, Marks :73%',
                'year' => '1997',
            ],

        ];

        return view('pages.about',compact('page_title','banner_title','data','experiences'));
    }

    public function project()
    {
        $page_title = 'My Project';
        $banner_title = 'My Project';

        $data = [
            [
                'id'    => 1,
                'title' => 'Item One',
                'image' => 'work-1.jpg',
                'technology' => 'Laravel',
            ],
            [
                'id'    => 2,
                'title' => 'Item Two',
                'image' => 'work-2.jpg',
                'technology' => 'Laravel',
            ],
            [
                'id'    => 3,
                'title' => 'Item Three',
                'image' => 'work-3.jpg',
                'technology' => 'Laravel',
            ],
            [
                'id'    => 1,
                'title' => 'Item Four',
                'image' => 'work-4.jpg',
                'technology' => 'Laravel',
            ],
            [
                'id'    => 2,
                'title' => 'Item Five',
                'image' => 'work-5.jpg',
                'technology' => 'Laravel',
            ],
            [
                'id'    => 3,
                'title' => 'Item Six',
                'image' => 'work-6.jpg',
                'technology' => 'Laravel',
            ],
        ];
        return view('pages.project',compact('page_title','banner_title','data'));
    }

    public function projectById($id)
    {
        $page_title = 'Project Details';
        $banner_title = 'Project Details';
        $category = 'Laravel Project';
        $client = 'ASU Company';
        $date = '01 March, 2023';
        $url = 'https://webhunter24.com/';
        $description = 'Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.';

        return view('pages.project_details',compact('page_title','banner_title','category','client','date','url','description'));
    }

    public function blogById($id)
    {
        $page_title = 'Blog Details';
        $banner_title = 'Blog Details';
        $title = 'Lorem ipsum dolor sit amet consec tetur adipisicing';
        $category = 'Laravel';
        $author = 'Subrata Dey';
        $comment = '5';
        $description = 'Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla quis lorem ut libero malesuada feugiat.

            Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin molestie malesuada.';


        return view('pages.blog_details',compact('page_title','banner_title','title','category','author','comment','description'));
    }

    public function contact()
    {
        $page_title = 'Contact Me';
        $banner_title = 'Contact Me';
        $address = 'House: 100, Uttara, Dhaka-1229';
        $email = 'anupbca1@gmail.com';
        $phone = '+88 01771898482';
        $description = 'I am specializes in utilizing the Laravel PHP framework to build robust and efficient web applications. Proficient in MVC architecture';
        return view('pages.contact',compact('page_title','banner_title','address','email','phone','description'));
    }
}
