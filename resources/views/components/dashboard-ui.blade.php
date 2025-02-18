<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="">
            <div class="row">
                <!-- Left section: 60% width -->
                <div class="col-md-7"> <!-- 7 columns out of 12 (60%) -->
                    <div>
                        <div class="m-5">
                            <h1>Hi, I am Jonathan Doe</h1>
                        </div>
                        <div class="m-5">
                            <p>I'm a design technologist in Atlanta. I like working on the front-end of the web. This is my site, Zento where I blog, share and write tutorials...</p>
                        </div>
                        <div class="m-5">
                            <p>let's Connect</p>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Right section: 40% width -->
                <div class="col-md-5"> <!-- 5 columns out of 12 (40%) -->
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
        </form>
        <hr>
        <div class="m-5">
            <div class="d-flex justify-content-center">
                <h3>Feature Article</h3>
            </div>
            <div>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Fundamention</h5>
                                <div class="row">
                                    <div class="col">
                                        <p class="mb-1">Jonathan Doe</p>
                                        <p class="mb-1">2 min read</p>
                                        <p class="mb-1">Difficult</p>
                                    </div>
                                    <div class="col">
                                        <a href="#">Understanding how links works</a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">HTML</h5>
                                <div class="row">
                                    <div class="col">
                                        <p class="mb-1">Jonathan Doe</p>
                                        <p class="mb-1">2 min read</p>
                                        <p class="mb-1">Difficult</p>
                                    </div>
                                    <div class="col">
                                        <a href="#">Introduct to HTML</a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">CSS</h5>
                                <div class="row">
                                    <div class="col">
                                        <p class="mb-1">Jonathan Doe</p>
                                        <p class="mb-1">2 min read</p>
                                        <p class="mb-1">Difficult</p>
                                    </div>
                                    <div class="col">
                                        <a href="#">CSS Selectors: Class and ID Basic Filtering for HTML elements </a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="m-5">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="mb-3">Topics Index</h4>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary text-white d-flex justify-content-center align-items-center" style="width: 30px; height: 30px; border-radius: 5px;">
                            1
                        </span>
                        <div class="form-floating flex-grow-1 ms-2 d-flex align-items-center">
                            <h4 class="mb-0 me-2">Fundamention</h4>
                            <button class="btn btn-link p-0" id="fundamentionButton">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <div id="fundamentionLinks" style="display: none; padding-top: 10px;">
                        <a href="#" style="display: block;">1. Unveiling the Web Browser: Gateway to the World Wide Web</a>
                        <a href="#" style="display: block;">2. HTTP, Web Browsers, and Web Servers</a>
                        <a href="#" style="display: block;">3. Understanding how links work</a>
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-success text-white d-flex justify-content-center align-items-center" style="width: 30px; height: 30px; border-radius: 5px;">
                            2
                        </span>
                        <div class="form-floating flex-grow-1 ms-2 d-flex align-items-center">
                            <h4 class="mb-0 me-2">HTML</h4>
                            <button class="btn btn-link p-0" id="htmlButton">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <div id="htmlLinks" style="display: none; padding-top: 10px;">
                        <a href="#" style="display: block;">1. Introduction to HTML Elements</a>
                        <a href="#" style="display: block;">2. Forms and Inputs in HTML</a>
                        <a href="#" style="display: block;">3. Structuring an HTML Page</a>
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-danger text-white d-flex justify-content-center align-items-center" style="width: 30px; height: 30px; border-radius: 5px;">
                            3
                        </span>
                        <div class="form-floating flex-grow-1 ms-2 d-flex align-items-center">
                            <h4 class="mb-0 me-2">CSS</h4>
                            <button class="btn btn-link p-0" id="cssButton">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <div id="cssLinks" style="display: none; padding-top: 10px;">
                        <a href="#" style="display: block;">1. Introduction to CSS</a>
                        <a href="#" style="display: block;">2. CSS Selectors and Properties</a>
                        <a href="#" style="display: block;">3. Responsive Web Design with CSS</a>
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-warning text-white d-flex justify-content-center align-items-center" style="width: 30px; height: 30px; border-radius: 5px;">
                            4
                        </span>
                        <div class="form-floating flex-grow-1 ms-2 d-flex align-items-center">
                            <h4 class="mb-0 me-2">JavaScript</h4>
                            <button class="btn btn-link p-0" id="jsButton">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <div id="jsLinks" style="display: none; padding-top: 10px;">
                        <a href="#" style="display: block;">1. Introduction to JavaScript</a>
                        <a href="#" style="display: block;">2. Variables and Functions in JS</a>
                        <a href="#" style="display: block;">3. DOM Manipulation in JavaScript</a>
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-info text-white d-flex justify-content-center align-items-center" style="width: 30px; height: 30px; border-radius: 5px;">
                            5
                        </span>
                        <div class="form-floating flex-grow-1 ms-2 d-flex align-items-center">
                            <h4 class="mb-0 me-2">Database</h4>
                            <button class="btn btn-link p-0" id="dbButton">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <div id="dbLinks" style="display: none; padding-top: 10px;">
                        <a href="#" style="display: block;">1. Introduction to Databases</a>
                        <a href="#" style="display: block;">2. SQL Basics</a>
                        <a href="#" style="display: block;">3. Database Normalization</a>
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-secondary text-white d-flex justify-content-center align-items-center" style="width: 30px; height: 30px; border-radius: 5px;">
                            6
                        </span>
                        <div class="form-floating flex-grow-1 ms-2 d-flex align-items-center">
                            <h4 class="mb-0 me-2">Deployment</h4>
                            <button class="btn btn-link p-0" id="deployButton">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <div id="deployLinks" style="display: none; padding-top: 10px;">
                        <a href="#" style="display: block;">1. Deployment Best Practices</a>
                        <a href="#" style="display: block;">2. Deploying to a Web Server</a>
                        <a href="#" style="display: block;">3. Managing a Live Website</a>
                    </div> 
                </div>
            
                <div class="col-md-8">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div>
                                        <h5>CSS</h5>
                                    </div>
                                    <div>
                                        <p class="mb-1">Jan 19, 2024</p>
                                        <p class="mb-1">2 min read</p>
                                        <p class="mb-1">Difficult</p>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div>
                                        <h2>Crafting Engaging CSS Animations: Step-by-Step Guide</h2>
                                    </div>
                                    <p>In the realm of technology blogging, captivating your audience goes beyond just the written word. Incorporating eye-catching CSS animations can elevate your content and provide a dynamic...</p>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#" class="me-2">Code</a>
                                            <a href="#" class="me-2">Guide</a>
                                            <a href="#" class="me-2">Tech</a>
                                        </div>
                                        <div>
                                            <button class="btn btn-light" type="button">Janthan Doe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div>
                                        <h5>CSS</h5>
                                    </div>
                                    <div>
                                        <p class="mb-1">Jan 19, 2024</p>
                                        <p class="mb-1">2 min read</p>
                                        <p class="mb-1">Difficult</p>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div>
                                        <h2>Crafting Engaging CSS Animations: Step-by-Step Guide</h2>
                                    </div>
                                    <p>In the realm of technology blogging, captivating your audience goes beyond just the written word. Incorporating eye-catching CSS animations can elevate your content and provide a dynamic...</p>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#" class="me-2">Code</a>
                                            <a href="#" class="me-2">Guide</a>
                                            <a href="#" class="me-2">Tech</a>
                                        </div>
                                        <div>
                                            <button class="btn btn-light" type="button">Janthan Doe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div>
                                        <h5>CSS</h5>
                                    </div>
                                    <div>
                                        <p class="mb-1">Jan 19, 2024</p>
                                        <p class="mb-1">2 min read</p>
                                        <p class="mb-1">Difficult</p>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div>
                                        <h2>Crafting Engaging CSS Animations: Step-by-Step Guide</h2>
                                    </div>
                                    <p>In the realm of technology blogging, captivating your audience goes beyond just the written word. Incorporating eye-catching CSS animations can elevate your content and provide a dynamic...</p>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#" class="me-2">Code</a>
                                            <a href="#" class="me-2">Guide</a>
                                            <a href="#" class="me-2">Tech</a>
                                        </div>
                                        <div>
                                            <button class="btn btn-light" type="button">Janthan Doe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div>
                                        <h5>CSS</h5>
                                    </div>
                                    <div>
                                        <p class="mb-1">Jan 19, 2024</p>
                                        <p class="mb-1">2 min read</p>
                                        <p class="mb-1">Difficult</p>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div>
                                        <h2>Crafting Engaging CSS Animations: Step-by-Step Guide</h2>
                                    </div>
                                    <p>In the realm of technology blogging, captivating your audience goes beyond just the written word. Incorporating eye-catching CSS animations can elevate your content and provide a dynamic...</p>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#" class="me-2">Code</a>
                                            <a href="#" class="me-2">Guide</a>
                                            <a href="#" class="me-2">Tech</a>
                                        </div>
                                        <div>
                                            <button class="btn btn-light" type="button">Janthan Doe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    
</body>
</html>
<script>
    document.getElementById('fundamentionButton').addEventListener('click', function() {
        const fundamentionLinks = document.getElementById('fundamentionLinks');
        fundamentionLinks.style.display = fundamentionLinks.style.display === 'none' ? 'block' : 'none';
    });

    document.getElementById('htmlButton').addEventListener('click', function() {
        const htmlLinks = document.getElementById('htmlLinks');
        htmlLinks.style.display = htmlLinks.style.display === 'none' ? 'block' : 'none';
    });

    document.getElementById('cssButton').addEventListener('click', function() {
        const cssLinks = document.getElementById('cssLinks');
        cssLinks.style.display = cssLinks.style.display === 'none' ? 'block' : 'none';
    });

    document.getElementById('jsButton').addEventListener('click', function() {
        const jsLinks = document.getElementById('jsLinks');
        jsLinks.style.display = jsLinks.style.display === 'none' ? 'block' : 'none';
    });

    document.getElementById('dbButton').addEventListener('click', function() {
        const dbLinks = document.getElementById('dbLinks');
        dbLinks.style.display = dbLinks.style.display === 'none' ? 'block' : 'none';
    });

    document.getElementById('deployButton').addEventListener('click', function() {
        const deployLinks = document.getElementById('deployLinks');
        deployLinks.style.display = deployLinks.style.display === 'none' ? 'block' : 'none';
    });
</script>