
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypertab</title>
    <link rel='stylesheet' href='css/css.css'>
</head>

<body id="body">
    <script src="js/bookmarks.js"></script>
    <script src="js/weather.js"></script>
    <script>
    const ip = "12.50.8.16"
    </script>
    <div class="bookmarks">
    </div>
    <div class="info">
        <div id="weather">
            <!--   Weather Widget in TOP RIGHT   -->
            <h2 id="winfo">Loading</h2>
            <h2 id="alerts"></h2>
        </div>
    </div>

    <div class="center">
        <h1 style="font-size: 80px; color: bisque;">Hypertabs</h1>
        <p id="txt" style="font-size: 25px; color: #FFFFFF; font-weight: normal; margin: 0; padding-top: 0; padding-bottom: 40px;">
            HELLO!<br>Welcome to the HyperTab BETA. Remember, there are still many changes to come. <br>Currently, multiplayer games are not supported, but are in development.
            <br>Also, the buttons on the bottom might not work.<br> for the best experience, go in fullscreen.</p>
        <forum id="input" onkeydown="if(event.keyCode == 13){location.href=`https://alloy123.herokuapp.com/fetch/_aHR0cHM6Ly9kdWNrZHVja2dvLmNvbQ==_\/?q=${document.getElementById('inputb').value}`;}" onsubmit="location.href=`https://alloy123.herokuapp.com/fetch/_aHR0cHM6Ly9kdWNrZHVja2dvLmNvbQ==_\/q=${document.getElementById('inputb').value}`;">
            <input id="inputb" placeholder="Search DuckDuckGo">
            <input id="inputimg" onclick="location.href=`https://alloy123.herokuapp.com/fetch/_aHR0cHM6Ly9kdWNrZHVja2dvLmNvbQ==_\/?q=${document.getElementById('inputb').value}`;"type="image" value="Login" src="https://titaniumnetwork.xyz/search.svg" height="24" width="24">
            <input type="submit" style="display:none">
        </forum>
        <div class="btns">
            <div onclick="location.href='g.html'" class="crm">
                <img class="icn" src="https://titaniumnetwork.xyz/games.png">
                <a class="btn1" id="bo">Games</a>
            </div>
            <div onclick="location.href='https://alloy123.herokuapp.com/fetch/_aHR0cHM6Ly9tdXNpYy55b3V0dWJlLmNvbQ==_/'" class="crm">
                <img class="icn" src="https://titaniumnetwork.xyz/bookmark.png">
                <a class="btn">Music</a>
            </div>
            <div onclick="location.href='c.html'" class="crm">
                <img class="icn" src="https://titaniumnetwork.xyz/icon.png">
                <a class="btn">Contributors</a>
            </div>
            <div onclick="location.href='https://alloy123.herokuapp.com/fetch/_aHR0cHM6Ly9kaXNjb3JkLmdn_/433UGM48Mt'" class="crm">
                <img class="icn" src="https://titaniumnetwork.xyz/dcd.png">
                <a class="btn">Join Discord</a>
            </div>
        </div>
    </div>


</body>

</html>