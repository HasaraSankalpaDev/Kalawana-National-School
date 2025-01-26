<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Animated Number Counting Up Example</title>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container mt-5">
    <div class="row col-12 d-flex">
        <div class="counter-flex gap-2 d-flex ">
            <div class="counter-box col-12 col-lg-4 col-md-4 text-center justify-content-center col-12 col-lg-4 py-4 px-3">
                <i class="fa-solid fa-person display-5 py-3"></i>
                <h1><span class="count">+15</span></h1>
                <h3>Classes</h3>
            </div>
            <div class="counter-box col-12 col-lg-4 col-md-4 text-center justify-content-center col-12 col-lg-4 py-4 px-3">
                <i class="fa-solid fa-school  display-5 py-4"></i>
                <h1><span class="count"> +2000</span></h1>
                <h3>Students</h3>
            </div>
            <div class="counter-box col-12 col-lg-4 col-md-4 text-center justify-content-center col-12 col-lg-4 py-4 px-3">
                <i class="fa-solid fa-chalkboard-user  display-5 py-4"></i>
                <h1><span class="count">+100</span></h1>
                <h3>Teachers</h3>
            </div>
        </div>
    </div>
</div>
<div class="container my-5 mx-5">
    <div class="row">
        <div class="col-12 col-lg-12">
            <p class="text-center">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam assumenda aut beatae enim iste itaque laudantium molestiae rem ullam. Aliquam atque blanditiis consequatur cumque, dolor dolorem doloremque dolores error eveniet exercitationem explicabo in, ipsam ipsum laudantium minima perferendis quae quis quo ratione reiciendis, rem sint suscipit veniam voluptatem voluptatibus? consectetur adipisicing elit. Aliquid enim sit soluta unde? Adipisci aspernatur assumenda autem cumque deleniti dicta distinctio dolores doloribus ducimus eligendi, et excepturi expedita facere facilis iure laborum magni molestiae non odio officia omnis pariatur perferendis praesentium quae quo reprehenderit repudiandae, sapiente sequi similique soluta suscipit unde ut veritatis. Mollitia sed sunt veniam! Animi atque culpa deleniti doloremque eligendi error eum id incidunt ipsum molestias nam nemo odit repellat repudiandae sint tenetur unde, velit vitae! Neque?</p>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="app.js"></script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
<script>
    try {
        fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
            return true;
        }).catch(function(e) {
            var carbonScript = document.createElement("script");
            carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
            carbonScript.id = "_carbonads_js";
            document.getElementById("carbon-block").appendChild(carbonScript);
        });
    } catch (error) {
        console.log(error);
    }
</script>
</body>
</html>
