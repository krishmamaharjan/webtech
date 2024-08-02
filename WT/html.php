<!-- 
    Author : Krishma Maharjan
    RollNo. : 11
    Batch : 2078
    AuthorUrl : https://github.com/SagarmathaCollegeofScienceandTechnology/webtechnology-krishmamaharjan.git
                https://github.com/krishmamaharjan
    AuthorGITID : krishmamaharjan
-->

<!-- Basic web layout-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0 auto;
            padding: 0;
            align-items: center;
            
        }
        .logo{
            max-width: 20%;
            margin: 0 auto;
            display: block;
        }
        
        nav{
            text-align: right;
            background-color: aliceblue;
            padding: 20px ; 
        }
        
        .container
        {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100px;
        }
        .content{
            max-width: 100%;
            padding: 40px;
            display: flex;
           
            align-items: center;
        }
        .content img{
            max-width: 50%;
            margin-right: 20px;
        }
        .content p{
            max-width: 100%;
            margin-left: 20px;
        }
        .content2{
            max-width: 100%;
            padding: 20px;
            display: flex;
           
            align-items: center;
        }
        .content2 img{
            max-width: 50%;
            margin-right: 20px;
        }
        .content2 p{
            max-width: 100%;
            margin-left: 20px;
        }
        .content3{
            max-width: 100%;
            padding: 20px;
            display: flex;
           
            align-items: center;
        }
        .content3 img{
            max-width: 50%;
            margin-right: 20px;
        }
        .content3 p{
            max-width: 100%;
            margin-left: 20px;
        }
        footer{
            text-align: center;
        }
        
    </style>
</head>
<body>
    <section>
        <header>
            <div class="logo">
                <img src="images\logo2.jpeg" height="200px">
            </div>
            <nav>
                
                <!-- <ul>
                    <li>Home</li>
                    <li>About us</li>
                    <li>Contact</li>
                    <li>Facebook</li>
                    <li>Email us</li>
                </ul> -->

                <a href="">Home</a>
                <a href="">About us</a>
                <a href="">Contact</a>
                <a href="">Facebook</a>
                <a href="">E-mail us</a>
                
            

            </nav>
        </header>
    </section>


    <section>
        <main>
            <article>
                <div id = "container">
                <div class = "content">

                
                    <img src="images/welcome.png" alt="welcome" height="200px">
                    <p>
                       
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero odio placeat explicabo non 
                        sunt! Necessitatibus laboriosam exercitationem, architecto a accusamus alias animi? Repellat 
                        quidem quaerat sint, magnam quo adipisci et!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid dicta perferendis in porro aperiam 
                        nihil eaque tempora? 
                        Veritatis ipsa qui corporis officia! Enim ex deserunt dolorum voluptatem vero explicabo maiores!
                    </p>
                 </div>
            


            <div class="content2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, qui iste dolorem iusto 
                    molestias Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate ex, cupiditate fuga numquam neque, 
                    doloremque itaque natus, ea iure incidunt blanditiis! Delectus 
                    architecto esse, assumenda expedita placeat cum officia deleniti. provident doloribus ipsam ex,eius, et illum 
                    fuga animi quidem eligendi eum atque 
                    hic ipsum itaque.
                </p>
            
                <img src="images/pk.png" alt="" height="200px">
            </div>

            <div class="content3">
                <img src="images/bg.jpeg" alt="" height="200px">
            
               
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit at quisquam obcaecati, neque quasi 
                    non repellat rem tempora praesentium consequuntur vel
                     possimus iusto ipsa eius voluptates alias esse voluptas hic.
                </p>
            </div>
        </div>   
            </article>
        </main>
    </section>


    <section>
        <footer>
            &copy; 2024,mysite.com, all right reserved
        </footer>
    </section>
</body>
</html>