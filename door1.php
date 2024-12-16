<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Door 1</title>
    <style>
        body {
            font-family: 'Comic Sans MS', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffe3b3;
            color: #333;
        }
        nav {
            background-color: #ff6f61;
            padding: 15px 0;
            position: sticky;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: color 0.3s;
        }
        nav ul li a:hover {
            color: #ffd700;
            transform: scale(1.1);
        }
        h1 {
            margin-top: 40px;
            font-size: 50px;
            color: #ff6f61;
            text-align: center;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
            animation: bounce 1s infinite alternate;
        }
        @keyframes bounce {
            0% { transform: translateY(0); }
            100% { transform: translateY(-10px); }
        }
        .content {
            max-width: 800px;
            margin: 40px auto;
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        }
        p {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
        }
        img {
            width: 100%;
            height: auto;
            display: block;
            margin: 20px auto;
            border: 2px solid #ff6f61;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        img:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.3);
        }
        a {
            text-decoration: none;
            color: #ff6f61;
            font-size: 18px;
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ffd700;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #ff6f61;
            color: white;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="door2.php">Door 2</a></li>
            <li><a href="door3.php">Door 3</a></li>
        </ul>
    </nav>
    <div class="content">
        <h1><b>HUMPTY DUMPTY</b>!</h1>
        <p><?php echo "One day, there was an egg called Humpty Dumpty"; ?></p>
        <img src="https://writefury.com/wp-content/uploads/2015/02/smallpuss5.jpg" alt="Humpty Dumpty">
        <p><b>BACKSTORY</b>!</p>
        <p><?php echo "Humpty and Puss grew up together in an orphanage, where they became close friends. Humpty had big dreams of becoming wealthy and powerful, but he was always a bit of a troublemaker. His obsession with riches led him to make questionable decisions, one of which was trying to steal the Golden Goose from a wealthy family. This event caused a rift between him and Puss, and they parted ways."; ?></p>
        <p><b>BANK HEIST</b>!</p>
        <p><?php echo "Years later, Humpty reappears in Puss life, and he convinces Puss to help him steal the Golden Goose from a magical beanstalk. To do this, they need to steal golden beans from the villainous Jack and Jill. Humpty insists that this heist will make them rich and will fix their past mistakes."; ?></p>
        <img src="https://www.theglobeandmail.com/resizer/v2/I72JQ3TRKFBPFGPKNR4JOPJ3ZM?auth=1a124d594ccf1a2df7d75efa23727f4b95d8bd6b06ddf8ec92029e60a42930e4&width=600&quality=80" alt="Humpty .">
        <p><b>BETRAYAL & REDEMPTION</b>!</p>
        <p><?php echo "During the heist, it is revealed that Humpty's motives are not entirely pure. He has been harboring feelings of betrayal toward Puss for abandoning him years ago, and he wants to use the Golden Goose to gain wealth and prove that he is more than just an egg. However, his plans go awry, and Puss and Humpty end up in dangerous situations."; ?></p>
        <p><?php echo "At the end of the movie, it is revealed that Humpty had actually planned the whole thing to make Puss take the fall for the crime, as he felt Puss had betrayed him. However, after a series of events, Humpty realizes his mistakes. He sacrifices himself to save Puss and the others, showing that he has changed and is seeking redemption."; ?></p>
        <img src="https://www.looper.com/img/gallery/the-ending-of-puss-in-boots-the-last-wish-explained/intro-1671811424.jpg" alt="Humpty Dumpty">
        <p><b>CONCLUSION</b>!</p>
        <p><?php echo "Humpty's story in Puss in Boots is one of friendship, betrayal, and redemption. While he starts off as a character driven by greed and revenge, he ultimately shows that he values his friendship with Puss more than anything else. His sacrifice at the end demonstrates that even though he made mistakes, he can still find a way to make things right."; ?></p>
        <a href="index.html">Back to Home</a>
    </div>
</body>
</html>
