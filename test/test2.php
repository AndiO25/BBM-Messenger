 <!DOCTYPE html>
    <html>
    <head>

    <title></title>
    <link rel="stylesheet" type="text/css" media="all" href="elastic.css" />
<script>
    body {
            font: 16px/24px Georgia, serif;
            color: #5A5A5A;
            margin: 0;
    }

    header, footer {
            /*padding: 30px 20px;  optional: add some padding to match the margins of the #wrapper */
            background: #555; /* optional: background colour */
            color: #F0F0F0;
    }

    #wrapper {
            padding-right: 400px; /* padding should be the total width of all right columns */
            /*margin: 0 20px;  optional: spacing to the side of our content and sidebars */
    }

    #content {
            float: left;
            width: 100%;
            min-width: 600px;
    }

    .sidebar {
            float: left;
            width: 400px;
            margin-right: -1000px;
            /*background: #DDD;  optional: background colour */
    }

    .sidebar .side-column {
            width: 200px;
            float: left;
            /*margin-left: 20px;  optional: add a small space between the columns as well as the content to the left */
    }

    footer {
            clear: left; /* clear the floating from the above content and sidebar this makes the footer appear correctly below */
    }
</script>
    </head>
    <body>
            <header><strong>Our Header</strong></header>
            <div id="wrapper">
                    <div id="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor interdum elit faucibus scelerisque. Curabitur eleifend orci eget ante egestas viverra ac nec mauris. Pellentesque et dolor et leo pellentesque sollicitudin vitae vel velit. Phasellus ullamcorper sapien in sapien fermentum viverra. Sed dignissim est nec risus elementum molestie. Morbi placerat pharetra massa vitae aliquam. Curabitur laoreet suscipit leo, sit amet lacinia dolor placerat eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Nulla lacinia, ante ac dignissim viverra, nunc orci rhoncus odio, porttitor aliquet orci massa non lorem.
                    </div>
                    <div class="sidebar">
                            <div class="side-column">
                                    Column 1-Sed ornare sollicitudin nisi, in tristique quam laoreet non. Nullam semper, turpis et pulvinar pulvinar, quam dui consequat mi, ac aliquet arcu nunc id massa. Vivamus aliquam odio eget neque auctor tempus sollicitudin dui malesuada. Suspendisse tincidunt eleifend pellentesque.
                            </div>
                            <div class="side-column">
                                    Phasellus arcu nulla, pulvinar et cursus id, venenatis ac augue. Sed vitae erat in ante tristique cursus at non ante. Ut auctor metus at neque consectetur pulvinar. Morbi et mauris odio. Nulla viverra vulputate leo, vitae porta augue aliquam ac. Praesent ut nisi velit.
                            </div>
                    </div>
            </div>
            <footer><strong>Our footer</strong></footer>

    </body>
    </html>