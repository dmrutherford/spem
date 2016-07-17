<?php
    
    $user = $_GET['user'];
    $playlist = $_GET['playlist'];
    
?>
<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="#23cf5f" />
        <title>SPEm<?php if (!empty($user) && !empty($playlist)) { echo ': ' . $user . ', ' . $playlist; } ?></title>
        <meta name="description" content="A tool for viewing publicly accessible Spotify playlists without an account." />
        <style>
            html {
                background: #282828;
                color: white;
                font-family: -apple-system, BlinkMacSystemFont, sans-serif;
                min-width: 332px;
                -webkit-font-smoothing: antialiased;
            }
            body {
                margin: 1em auto;
                max-width: 300px;
                padding: 0 1em;
            }
            h1 {
                border-bottom: 1px solid #23cf5f;
                display: inline-block;
                font-size: 1.25em;
                font-weight: normal;
                margin-bottom: 0;
                margin-left: -10000px;
                padding-bottom: 0.25rem;
                padding-left: 10000px;
            }
            h1 a {
                color: white;
            }
            form {
                margin: 2em 0 2.5em;
            }
            label {
                display: block;
                margin-top: 1em;
            }
            input {
                background: #181818;
                border: 1px solid #181818;
                border-bottom-color: black;
                box-sizing: border-box;
                color: #a0a0a0;
                display: block;
                font-family: monospace;
                font-size: 16px;
                margin-top: 0.5em;
                padding: 0.5em;
                width: 100%;
            }
            input:focus {
                border-color: #23cf5f;
                outline: none;
            }
            button {
                background: #23cf5f;
                border: none;
                border-radius: 18px;
                color: #282828;
                cursor: pointer;
                font-size: 16px;
                margin-top: 1em;
                padding: 0.5em;
                text-transform: uppercase;
                width: 100%;
                -webkit-font-smoothing: subpixel-antialiased;
            }
            footer {
                color: #a0a0a0;
                line-height: 1.5;
                margin: 2.5em 0;
            }
            a {
                color: #23cf5f;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <h1><a href=".">Spotify Playlist Embed</a></h1>
        <form method="GET" action=".">
            <label for="user">User</label>
            <input type="text" name="user" id="user" value="<?php echo $user; ?>" />
            <label for="playlist">Playlist</label>
            <input type="text" name="playlist" id="playlist" value="<?php echo $playlist; ?>" />
            <button type="submit">Get Playlist</button>
        </form>
    <?php
        
        if (!empty($user) && !empty($playlist)) {
            
            echo '<iframe src="https://embed.spotify.com/?uri=spotify:user:' . $user . ':playlist:' . $playlist . '" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>';
            
        }
            
    ?>
        <footer>
            <p>I don&rsquo;t have a Spotify account, but I do like to check out the playlists that people&nbsp;share.</p>
            <p>Spotify don&rsquo;t make it easy to view the tracklist &ndash; but they <em>do</em> make it very easy to embed a public playlist. And those embedded playlists include a&nbsp;tracklist.</p>
            <p>I hope you find this as useful as I do. If you want to shower me with gratitude, I&rsquo;m <a href="https://twitter.com/dmrutherford" target="_blank">@dmrutherford</a> on&nbsp;Twitter.</p>
        </footer>
    </body>
</html>