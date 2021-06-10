<?php
require_once "navigation.php";
?>

    <header>
        <p>Welcome <?php if (!empty($_SESSION) && !empty($_SESSION["full_name"])) echo $_SESSION["full_name"];?></p>
        <p>Welcome <?php if (!empty($_SESSION) && !empty($_SESSION["full_name"])) echo $_SESSION["user_role"];?></p>
    </header>

<body>
This is a Manchester United OLX SHOP!

Here is some club history:
Manchester United Football Club is a professional football club based in Old Trafford, Greater Manchester, England, that competes in the Premier League, the top flight of English football. Nicknamed "the Red Devils", the club was founded as Newton Heath LYR Football Club in 1878, changed its name to Manchester United in 1902 and moved to its current stadium, Old Trafford, in 1910.

Manchester United have won more trophies than any other club in English football,[5][6] with a record 20 League titles, 12 FA Cups, five League Cups and a record 21 FA Community Shields. United have also won three European Cups/UEFA Champions Leagues, one UEFA Europa League, one UEFA Cup Winners' Cup, one UEFA Super Cup, one Intercontinental Cup and one FIFA Club World Cup. In 1998–99, the club became the first in the history of English football to achieve the continental European treble.[7] By winning the UEFA Europa League in 2016–17, they became one of five clubs to have won all three main UEFA club competitions.

The 1958 Munich air disaster claimed the lives of eight players. In 1968, under the management of Matt Busby, Manchester United became the first English football club to win the European Cup. Alex Ferguson won 38 trophies as manager, including 13 Premier League titles, 5 FA Cups and 2 UEFA Champions Leagues, between 1986 and 2013,[8][9][10] when he announced his retirement. Manchester United is one of the most widely supported football clubs in the world,[11][12] and has rivalries with Liverpool, Manchester City, Arsenal and Leeds United.

Manchester United was the highest-earning football club in the world for 2016–17, with an annual revenue of €676.3 million,[13] and the world's third most valuable football club in 2019, valued at £3.15 billion ($3.81 billion).[14] After being floated on the London Stock Exchange in 1991, the club was taken private after a purchase by Malcolm Glazer in 2005 at almost £800 million, of which over £500 million of borrowed money became the club's debt.[15] From 2012, some shares of the club were listed on the New York Stock Exchange, although the Glazer family retains overall ownership and control of the club.<br>

<iframe width="800" height="500" style="right: -500px; position: relative;"  src="https://www.youtube.com/embed/PPBtTNNS4WY" title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</body>

<?php
require_once "footer.php";
?>
<style>
    p{
        color:white;
    }
    body {
background-image: url("https://live.staticflickr.com/2877/33823450815_411667305b_b.jpg") ;
        background-attachment: fixed;
        background-size: 100% 100%;
        background-repeat: no-repeat;
        color:white;
        font-size: 18px;
    }
</style>
