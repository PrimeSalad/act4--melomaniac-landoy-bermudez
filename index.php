<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>act4-melomaniac-landoy</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <style>
        body{
            font-family: Poppins;
            margin: 0;
            background-color: #010101;
            color: #eee;
        }
        svg{
            width: 25px;
        }
        header{
            width: 3000px;
            max-width: 100%;
            margin: auto;
            display: grid;
            grid-template-columns: 50px 1fr 50px;
            grid-template-rows: 50px;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 100;
        }
        header .logo{
            font-weight: bold;
        }
        header .menu{
            padding: 0;
            margin: 0;
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 20px;
            font-weight: 500;
        }
        /* css slider */
        .slider{
            height: 100vh;
            margin-top: -50px;
            position: relative;
        }
        .slider .list .item{
            position: absolute;
            inset: 0 0 0 0;
            overflow: hidden;
            opacity: 0;
            transition: .5s;
        }
        .slider .list .item img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .slider .list .item::after{
            content: '';
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            bottom: 0;
            background-image: linear-gradient(
                to top, #000 40%, transparent
            );
        }
        .slider .list .item .content{
            position: absolute;
            left: 10%;
            top: 20%;
            width: 500px;
            max-width: 80%;
            z-index: 1;
        }
        .slider .list .item .content p:nth-child(1){
            text-transform: uppercase;
            letter-spacing: 10px;
        }
        .slider .list .item .content h2{
            font-size: 80px;
            margin: 0;
        }
        .slider .list .item.active{
            opacity: 1;
            z-index: 10;
        }
        @keyframes showContent {
            to{
                transform: translateY(0);
                filter: blur(0);
                opacity: 1;
            }
        }
        .slider .list .item.active p:nth-child(1),
        .slider .list .item.active h2,
        .slider .list .item.active p:nth-child(3){
            transform: translateY(30px);
            filter: blur(20px);
            opacity: 0;
            animation: showContent .5s .7s ease-in-out 1 forwards;
        }
        .slider .list .item.active h2{
            animation-delay: 1s;
        }
        .slider .list .item.active p:nth-child(3){
            animation-duration: 1.3s;
        }
        .arrows{
            position: absolute;
            top: 30%;
            right: 50px;
            z-index: 100;
        }
        .arrows button{
            background-color: #eee5;
            border: none;
            font-family: monospace;
            width: 40px;
            height: 40px;
            border-radius: 5px;
            font-size: x-large;
            color: #eee;
            transition: .5s;
        }
        .arrows button:hover{
            background-color: #eee;
            color: black;
        }
        .thumbnail{
            position: absolute;
            bottom: 50px;
            z-index: 11;
            display: flex;
            gap: 10px;
            width: 100%;
            height: 250px;
            padding: 0 50px;
            box-sizing: border-box;
            overflow: auto;
            justify-content: center;
        }
        .thumbnail::-webkit-scrollbar{
            width: 0;
        }
        .thumbnail .item{
            width: 150px;
            height: 220px;
            filter: brightness(.5);
            transition: .5s;
            flex-shrink: 0;
        }
        .thumbnail .item img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
        .thumbnail .item.active{
            filter: brightness(1);
        }
        .thumbnail .item .content{
            position: absolute;
            inset: auto 10px 10px 10px;
        }
        @media screen and (max-width: 678px) {
            .thumbnail{
                justify-content: start;
            }
            .slider .list .item .content h2{
                font-size: 60px;
            }
            .arrows{
                top: 10%;
            }
        }
        
    </style>
</head>

<body>
    <!-- header -->
    <header>
    </header>

    <!-- slider -->

    <div class="slider">
        <!-- list Items -->
        <div class="list">
            <div class="item active">
                <img src="image/img1.png">
                <div class="content">
                    <p>Fearless (2008)</p>
                    <h2>Love Story</h2>
                    <p>
                    A classic tale of forbidden love with a happy ending, filled with imagery from Romeo and Juliet.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="image/img2.jpg">
                <div class="content">
                    <p>1989 (2014)</p>
                    <h2>Slut</h2>
                    <p>
                    Addresses the public perception of her relationships and confronts the sexist double standards she has faced throughout her career.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="image/img3.jpg">
                <div class="content">
                    <p>Red (2012)</p>
                    <h2>Red</h2>
                    <p>
                    An anthemic track capturing the intensity and complexity of a tumultuous relationship, painted with vivid emotions.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="image/img4.jpg">
                <div class="content">
                    <p>Reputation (2017)</p>
                    <h2>Delicate</h2>
                    <p>
                     A vulnerable and introspective track where Taylor Swift expresses uncertainty and caution in a new relationship.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="image/img5.jpg">
                <div class="content">
                    <p> Lover (2019)</p>
                    <h2>Lover</h2>
                    <p>
                    A tender declaration of enduring love, celebrating the small moments and simplicity of a committed relationship.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="image/img6.jpg">
                <div class="content">
                    <p>Folklore (2020)</p>
                    <h2>Cardigan</h2>
                    <p>
                        A dreamy, introspective track exploring nostalgia and the bittersweet memories of past romance.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="image/img7.jpg">
                <div class="content">
                    <p>Taylor Swift (2006)</p>
                    <h2>Our Song</h2>
                    <p>
                    A cheerful, nostalgic tune recounting the special moments in a young relationship, set to a catchy melody.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="image/img8.jpg">
                <div class="content">
                    <p>Speak Now (2010)</p>
                    <h2>Mine</h2>
                    <p>
                    It's a testament to seizing the moment and speaking up for what you believe in, despite societal norms or expectations. 
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="image/img9.jpg">
                <div class="content">
                    <p>1989 (2014)</p>
                    <h2>Style</h2>
                    <p>
                    It's a testament to seizing the moment and speaking up for what you believe in, despite societal norms or expectations. 
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="image/img10.jpg">
                <div class="content">
                    <p>1989 (2014)</p>
                    <h2>Bad Blood</h2>
                    <p>
                    Explores themes of betrayal and disappointment in a friendship turned sour.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="image/img11.jpg">
                <div class="content">
                    <p>1989 (2014)</p>
                    <h2>Wildest Dreams</h2>
                    <p>
                    A hauntingly beautiful track that paints a picture of a fleeting romance.
                    </p>
                </div>
            </div>
        </div>
        <!-- button arrows -->
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        
        <!-- thumbnail -->
       <!-- thumbnail -->
       <h1></h1>
       <style>
 .thumbnail .content {
    color: white; /* Set font color to white */
    position: relative; /* Set position to relative */
    font-weight: bold; /* Make the text bold */
    text-align: center; /* Center text horizontally */
    padding: 5px; /* Add padding for spacing */
    font-size: 14px; /* Set font size */
    text-shadow: 0 0 5px black; /* Add black shadow to the text */
}






</style>


<div class="thumbnail">
    <a href="song1.php" class="item active">
        <img src="image/img1.png">
        <div class="content">
            Love Story
        </div>
    </a>
    <a href="song2.php" class="item">
        <img src="image/img2.jpg">
        <div class="content">
            Slut
        </div>
    </a>
    <a href="song3.php" class="item">
        <img src="image/img3.jpg">
        <div class="content">
            Red
        </div>
    </a>
    <a href="song4.php" class="item">
        <img src="image/img4.jpg">
        <div class="content">
            Delicate
        </div>
    </a>
    <a href="song5.php" class="item">
        <img src="image/img5.jpg">
        <div class="content">
            Lover
        </div>
    </a>
    <a href="song6.php" class="item">
        <img src="image/img6.jpg">
        <div class="content">
            Cardigan
        </div>
    </a>
    <a href="song7.php" class="item">
        <img src="image/img7.jpg">
        <div class="content">
            Our Song
        </div>
    </a>
    <a href="song8.php" class="item">
        <img src="image/img8.jpg">
        <div class="content">   
            Mine
        </div>
    </a>
    <a href="song9.php" class="item">
        <img src="image/img9.jpg">
        <div class="content">
            Style
        </div>
    </a>
    <a href="song10.php" class="item">
        <img src="image/img10.jpg">
        <div class="content">
            Bad Blood
        </div>
    </a>
    <a href="song11.php" class="item">
        <img src="image/img11.jpg">
        <div class="content">
            Wildest Dream
        </div>
    </a>
</div>



    <script src="js/app.js"></script>
    
</body>
</html>
