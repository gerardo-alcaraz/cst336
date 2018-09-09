<!DOCTYPE html>
<html>
    <head>
        <title>CSS Examples and Precedence</title>
        <link href="./sheet1.css" rel="stylesheet">
        <body>
            <style>
                /*All paragraphs in the document*/
                p{
                    margin:10px;
                }
            </style>
            <p id ="first" style="background-color:green">
                Donec at felis ut tortor blandit mattis. Donec egestas orci vel quam aliquet, ut fringilla libero viverra. Vestibulum nec nibh pretium, vulputate eros sed, tristique purus. Donec congue quis velit eget condimentum. Praesent commodo vitae nisi id maximus. Donec egestas eleifend neque vitae tempor. Etiam vitae odio vel nisi tincidunt aliquam. Donec sollicitudin dui sit amet magna molestie, sed tempus leo egestas. Vestibulum dictum ex id viverra semper. Suspendisse potenti.
            </p>
            <p class="highlighted">
                Duis non viverra ante. Aliquam efficitur ipsum vitae augue accumsan congue. In egestas dapibus neque, non blandit arcu blandit nec. Vestibulum et odio nunc. Nunc imperdiet justo a ultrices varius. Morbi eget dictum purus. Donec venenatis mi id ligula accumsan, vitae egestas justo luctus. Phasellus eleifend lobortis dolor, a tincidunt est efficitur ut. Nam finibus turpis non magna dignissim, eu tempus tellus congue. Duis varius ultrices viverra. Nam odio dolor, rhoncus pretium pharetra a, accumsan vel velit. Donec facilisis lorem in ultricies tristique. Maecenas quam augue, commodo non leo sit amet, commodo scelerisque lacus. Suspendisse vulputate fringilla massa vitae vestibulum. Suspendisse lacinia in lacus eu interdum. Aliquam erat volutpat.
            </p>
            <img src="https://hookagency.com/wp-content/uploads/2017/07/worst-stock-photos-for-memes.jpg" style="width:6 00px">
            <style>
                img{
                    height:400px;
                    border-style:dashed;
                }
            </style>

        </body>
    </head>
</html>

<style>
    .not{
        background-color:white;
    }
</style>