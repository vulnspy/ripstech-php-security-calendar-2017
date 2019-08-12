<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#"><head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  
  <title>RIPS - PHP Security Advent Calendar 2017</title>
  

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" rel="stylesheet" />

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css"
    integrity="sha256-auPoJwk/+RK6KSkib92Dkq1Y5hEkZvKtvSwucs15Skg="
    crossorigin="anonymous"
  />

  
  <link rel="stylesheet" href="/scss/main.min.css" media="screen" />
  
  <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous"
  />

  <link rel="apple-touch-icon" sizes="57x57" href="https://www.ripstech.com/favicons/apple-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="https://www.ripstech.com/favicons/apple-icon-60x60.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="https://www.ripstech.com/favicons/apple-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="https://www.ripstech.com/favicons/apple-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="https://www.ripstech.com/favicons/apple-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="https://www.ripstech.com/favicons/apple-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="https://www.ripstech.com/favicons/apple-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="https://www.ripstech.com/favicons/apple-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="https://www.ripstech.com/favicons/apple-icon-180x180.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="https://www.ripstech.com/favicons/android-icon-192x192.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="https://www.ripstech.com/favicons/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="96x96" href="https://www.ripstech.com/favicons/favicon-96x96.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="https://www.ripstech.com/favicons/favicon-16x16.png" />
  <link rel="manifest" href="/favicons/manifest.json" />
  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta name="msapplication-TileImage" content="https://www.ripstech.com/favicons/ms-icon-144x144.png" />
  <meta name="theme-color" content="#ffffff" />

   <meta content="php security, challenge, training" name="keywords"> 

  
    <meta name="description" content="Discover daily code challenges about PHP security pitfalls to train your security skills. Can you spot the vulnerability?" />
    <meta property="og:description" content="Discover daily code challenges about PHP security pitfalls to train your security skills. Can you spot the vulnerability?" />
  

  <meta property="og:site_name" content="RIPS" />
  <meta property="og:type" content="website" />

  
    <meta property="og:image" content="https://www.ripstech.com/img/research/resources/php_security_advent_calendar.jpg" />
    <meta property="og:image:url" content="https://www.ripstech.com/img/research/resources/php_security_advent_calendar.jpg" />
    <meta property="og:image:secure_url" content="https://www.ripstech.com/img/research/resources/php_security_advent_calendar.jpg" />
    <meta property="twitter:image" content="https://www.ripstech.com/img/research/resources/php_security_advent_calendar.jpg" />
  

  
    <meta property="og:title" content="RIPS - PHP Security Advent Calendar 2017" />
    <meta name="twitter:title" content="RIPS - PHP Security Advent Calendar 2017" />
  

  <meta name="twitter:site" content="@ripstech" />
  <meta name="twitter:creator" content="@ripstech" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:description" content="Read More &rsaquo;" />
</head>
<body>
      
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="/" title="Homepage">
      <img src="/img/logo_light_color.svg" height="43" width="139" alt="">
    </a>

    <div>
      <div class="buttons d-none d-sm-inline-block d-md-inline-block d-lg-none">
        
          <a class="btn btn-sm btn-outline btn-outline-light" href="/contact/">
            <span>Contact</span>
          </a>
          <a class="btn btn-sm btn-outline btn-outline-green" href="https://www.ripstech.com/free-trial/">
            <span>Trial</span>
          </a>
        
      </div>

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#mainNav"
        aria-controls="mainNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="/product/tour/">Product</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/integrations/cicd/">Integrations</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/customers/testimonials/">Customers</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/research/blog/">Research</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/company/about/">Company</a>
        </li>
      </ul>

      <div class="buttons">
        
          <a class="btn btn-sm btn-outline btn-outline-light" href="/contact/">
            <span>Contact</span>
          </a>
          <a class="btn btn-sm btn-outline btn-outline-green" href="https://www.ripstech.com/free-trial/">
            <span>Trial</span>
          </a>
        
      </div>
    </div>
  </div>
</nav>
<div id="content"> 
<div class="apav apav-2017">
  <div class="apav-background">
    <div class="container">
      <h3><strong>RIPS</strong>Tech presents</h3>
      <h1>PHP Security Calendar 2017</h1>

      <div class="text-center">
        <a href="https://blog.ripstech.com/2017/php-security-advent-calendar/" class="highlight">
          <i class="fa fa-fw fa-info-circle"></i>
          Find out more about this calendar
        </a>
        <br />
        <a href='https://www.ripstech.com/php-security-calendar-2018/' class="highlight">
        <i class="fa fa-fw fa-info-circle"></i>
        Visit security calendar 2018
        </a>
      </div>

      <div class="subscribe-form">
        <form
          method="POST"
          action="//ripstech.us14.list-manage.com/subscribe/post?u=d864b7e0607187e3917a94bc5&amp;id=d19d9ad04b"
          class="form-horizontal subscribe-form"
          name="mc-embedded-subscribe-form"
          target="_blank" rel="noopener"
          novalidate
        >
          <div class="form-group">
            <input type="email" class="form-control form-control-lg inputEmail" name="EMAIL" placeholder="E-Mail Address">
            <input type="hidden" name="b_d864b7e0607187e3917a94bc5_d19d9ad04b" tabindex="-1" value="">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-lg btn-primary">
              Subscribe
            </button>
          </div>
        </form>
      </div>
    </div>

    <div class="cal">
      <div class="day">
        <div class="door door-1" data-toggle="modal" data-target="#modal-day-1">
          <div>1</div>
          <div class="short-name">Wish List</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-2" data-toggle="modal" data-target="#modal-day-2">
          <div>2</div>
          <div class="short-name">Twig</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-3" data-toggle="modal" data-target="#modal-day-3">
          <div>3</div>
          <div class="short-name">Snow Flake</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-4" data-toggle="modal" data-target="#modal-day-4">
          <div>4</div>
          <div class="short-name">False Beard</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-5" data-toggle="modal" data-target="#modal-day-5">
          <div>5</div>
          <div class="short-name">Postcard</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-6" data-toggle="modal" data-target="#modal-day-6">
          <div>6</div>
          <div class="short-name">Frost Pattern</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-7" data-toggle="modal" data-target="#modal-day-7">
          <div>7</div>
          <div class="short-name">Bells</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-8" data-toggle="modal" data-target="#modal-day-8">
          <div>8</div>
          <div class="short-name">Candle</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-9" data-toggle="modal" data-target="#modal-day-9">
          <div>9</div>
          <div class="short-name">Rabbit</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-10" data-toggle="modal" data-target="#modal-day-10">
          <div>10</div>
          <div class="short-name">Anticipation</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-11" data-toggle="modal" data-target="#modal-day-11">
          <div>11</div>
          <div class="short-name">Pumpkin Pie</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-12" data-toggle="modal" data-target="#modal-day-12">
          <div>12</div>
          <div class="short-name">String Lights</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-13" data-toggle="modal" data-target="#modal-day-13">
          <div>13</div>
          <div class="short-name">Turkey Baster</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-14" data-toggle="modal" data-target="#modal-day-14">
          <div>14</div>
          <div class="short-name">Snowman</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-15" data-toggle="modal" data-target="#modal-day-15">
          <div>15</div>
          <div class="short-name">Sleigh Ride</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-16" data-toggle="modal" data-target="#modal-day-16">
          <div>16</div>
          <div class="short-name">Poem</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-17" data-toggle="modal" data-target="#modal-day-17">
          <div>17</div>
          <div class="short-name">Mistletoe</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-18" data-toggle="modal" data-target="#modal-day-18">
          <div>18</div>
          <div class="short-name">Sign</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-19" data-toggle="modal" data-target="#modal-day-19">
          <div>19</div>
          <div class="short-name">Birch</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-20" data-toggle="modal" data-target="#modal-day-20">
          <div>20</div>
          <div class="short-name">Stocking</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-21" data-toggle="modal" data-target="#modal-day-21">
          <div>21</div>
          <div class="short-name">Gift Wrap</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-22" data-toggle="modal" data-target="#modal-day-22">
          <div>22</div>
          <div class="short-name">Chimney</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-23" data-toggle="modal" data-target="#modal-day-23">
          <div>23</div>
          <div class="short-name">Cookies</div>
        </div>
      </div>
      <div class="day">
        <div class="door door-24" data-toggle="modal" data-target="#modal-day-24">
          <div>24</div>
          <div class="short-name">Nutcracker</div>
        </div>
      </div>
    </div>
  </div>

  <div class="shariff apav-shariff" data-lang="en" data-services="twitter, facebook, linkedin, reddit"></div>
</div>

<!-- DAY 1 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 1 - Wish List</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span><img src="/img/apav/close.png" alt="Close" /></span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span><span class="lnt">17
</span><span class="lnt">18
</span><span class="lnt">19
</span><span class="lnt">20
</span><span class="lnt">21
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="k">class</span> <span class="nc">Challenge</span> <span class="p">{</span>
  <span class="k">const</span> <span class="no">UPLOAD_DIRECTORY</span> <span class="o">=</span> <span class="s1">&#39;./solutions/&#39;</span><span class="p">;</span>
  <span class="k">private</span> <span class="nv">$file</span><span class="p">;</span>
  <span class="k">private</span> <span class="nv">$whitelist</span><span class="p">;</span>

  <span class="k">public</span> <span class="k">function</span> <span class="fm">__construct</span><span class="p">(</span><span class="nv">$file</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">file</span> <span class="o">=</span> <span class="nv">$file</span><span class="p">;</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">whitelist</span> <span class="o">=</span> <span class="nx">range</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span> <span class="mi">24</span><span class="p">);</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="fm">__destruct</span><span class="p">()</span> <span class="p">{</span>
    <span class="k">if</span> <span class="p">(</span><span class="nx">in_array</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">file</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">],</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">whitelist</span><span class="p">))</span> <span class="p">{</span>
      <span class="nx">move_uploaded_file</span><span class="p">(</span>
        <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">file</span><span class="p">[</span><span class="s1">&#39;tmp_name&#39;</span><span class="p">],</span>
        <span class="nx">self</span><span class="o">::</span><span class="na">UPLOAD_DIRECTORY</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">file</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">]</span>
      <span class="p">);</span>
    <span class="p">}</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="nv">$challenge</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Challenge</span><span class="p">(</span><span class="nv">$_FILES</span><span class="p">[</span><span class="s1">&#39;solution&#39;</span><span class="p">]);</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-1-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-1-result">
          <div class="apav-result-box">
            <p>
              The challenge contains an arbitrary file upload vulnerability in line 13. The operation
              <code class="inline">in_array()</code> is used in line 12 to check if the file name is a number.
              However, it is type-unsafe because the third parameter is not set to 'true'. Hence, PHP will
              try to type-cast the file name to an integer value when comparing it to the array
              $whitelist (line 8). As a result it is possible to bypass the whitelist by prepending a value in the
              range of 1 and 24 to the file name, for example "5backdoor.php". The uploaded PHP file then
              leads to code execution on the web server.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day1.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 2 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 2 - Twig</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span><span class="lnt">17
</span><span class="lnt">18
</span><span class="lnt">19
</span><span class="lnt">20
</span><span class="lnt">21
</span><span class="lnt">22
</span><span class="lnt">23
</span><span class="lnt">24
</span><span class="lnt">25
</span><span class="lnt">26
</span><span class="lnt">27
</span><span class="lnt">28
</span><span class="lnt">29
</span><span class="lnt">30
</span><span class="lnt">31
</span><span class="lnt">32
</span><span class="lnt">33
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="c1">// composer require &#34;twig/twig&#34;
</span><span class="c1"></span><span class="k">require</span> <span class="s1">&#39;vendor/autoload.php&#39;</span><span class="p">;</span>

<span class="k">class</span> <span class="nc">Template</span> <span class="p">{</span>
  <span class="k">private</span> <span class="nv">$twig</span><span class="p">;</span>

  <span class="k">public</span> <span class="k">function</span> <span class="fm">__construct</span><span class="p">()</span> <span class="p">{</span>
    <span class="nv">$indexTemplate</span> <span class="o">=</span> <span class="s1">&#39;&lt;img &#39;</span> <span class="o">.</span>
      <span class="s1">&#39;src=&#34;https://loremflickr.com/320/240&#34;&gt;&#39;</span> <span class="o">.</span>
      <span class="s1">&#39;&lt;a href=&#34;{{link|escape}}&#34;&gt;Next slide &amp;raquo;&lt;/a&gt;&#39;</span><span class="p">;</span>

    <span class="c1">// Default twig setup, simulate loading
</span><span class="c1"></span>    <span class="c1">// index.html file from disk
</span><span class="c1"></span>    <span class="nv">$loader</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Twig\Loader\ArrayLoader</span><span class="p">([</span>
      <span class="s1">&#39;index.html&#39;</span> <span class="o">=&gt;</span> <span class="nv">$indexTemplate</span>
    <span class="p">]);</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">twig</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Twig\Environment</span><span class="p">(</span><span class="nv">$loader</span><span class="p">);</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">getNexSlideUrl</span><span class="p">()</span> <span class="p">{</span>
    <span class="nv">$nextSlide</span> <span class="o">=</span> <span class="nv">$_GET</span><span class="p">[</span><span class="s1">&#39;nextSlide&#39;</span><span class="p">];</span>
    <span class="k">return</span> <span class="nx">filter_var</span><span class="p">(</span><span class="nv">$nextSlide</span><span class="p">,</span> <span class="nx">FILTER_VALIDATE_URL</span><span class="p">);</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">render</span><span class="p">()</span> <span class="p">{</span>
    <span class="k">echo</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">twig</span><span class="o">-&gt;</span><span class="na">render</span><span class="p">(</span>
      <span class="s1">&#39;index.html&#39;</span><span class="p">,</span>
      <span class="p">[</span><span class="s1">&#39;link&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getNexSlideUrl</span><span class="p">()]</span>
    <span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="p">(</span><span class="k">new</span> <span class="nx">Template</span><span class="p">())</span><span class="o">-&gt;</span><span class="na">render</span><span class="p">();</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-2-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-2-result">
          <div class="apav-result-box">
            <p>
              The challenge contains a cross-site scripting vulnerability in line 26. There are
              two filters that try to assure that the link that is passed to the
              <code class="inline">&lt;a&gt;</code> tag is a genuine URL. First, the
              <code class="inline">filter_var()</code> function in line 22 checks if it is a valid URL.
              Then, Twig's template escaping is used in line 10 that avoids breaking out of the
              <code class="inline">href</code> attribute.
            </p>
            <p>
              The vulnerability can still be exploited with the following URL:
              <code class="inline">?nextSlide=javascript://comment%250aalert(1)</code>.
              <br/>
              The payload does not involve any markup characters that would be affected by Twig's escaping.
              At the same time, it is a valid URL for <code class="inline">filter_var()</code>. We used a
              JavaScript protocol handler, followed by a JavaScript comment introduced with
              <code class="inline">//</code> and then the actual JS payload follows on a newline.
              When the link is clicked, the JavaScript payload is executed in the browser of the victim.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day2.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 3 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-3">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 3 - Snow Flake</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span><span class="lnt">17
</span><span class="lnt">18
</span><span class="lnt">19
</span><span class="lnt">20
</span><span class="lnt">21
</span><span class="lnt">22
</span><span class="lnt">23
</span><span class="lnt">24
</span><span class="lnt">25
</span><span class="lnt">26
</span><span class="lnt">27
</span><span class="lnt">28
</span><span class="lnt">29
</span><span class="lnt">30
</span><span class="lnt">31
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="k">function</span> <span class="nf">__autoload</span><span class="p">(</span><span class="nv">$className</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">include</span> <span class="nv">$className</span><span class="p">;</span>
<span class="p">}</span>

<span class="nv">$controllerName</span> <span class="o">=</span> <span class="nv">$_GET</span><span class="p">[</span><span class="s1">&#39;c&#39;</span><span class="p">];</span>
<span class="nv">$data</span> <span class="o">=</span> <span class="nv">$_GET</span><span class="p">[</span><span class="s1">&#39;d&#39;</span><span class="p">];</span>

<span class="k">if</span> <span class="p">(</span><span class="nx">class_exists</span><span class="p">(</span><span class="nv">$controllerName</span><span class="p">))</span> <span class="p">{</span>
  <span class="nv">$controller</span> <span class="o">=</span> <span class="k">new</span> <span class="nv">$controllerName</span><span class="p">(</span><span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;t&#39;</span><span class="p">],</span> <span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;v&#39;</span><span class="p">]);</span>
  <span class="nv">$controller</span><span class="o">-&gt;</span><span class="na">render</span><span class="p">();</span>
<span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
  <span class="k">echo</span> <span class="s1">&#39;There is no page with this name&#39;</span><span class="p">;</span>
<span class="p">}</span>

<span class="k">class</span> <span class="nc">HomeController</span> <span class="p">{</span>
  <span class="k">private</span> <span class="nv">$template</span><span class="p">;</span>
  <span class="k">private</span> <span class="nv">$variables</span><span class="p">;</span>

  <span class="k">public</span> <span class="k">function</span> <span class="fm">__construct</span><span class="p">(</span><span class="nv">$template</span><span class="p">,</span> <span class="nv">$variables</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span> <span class="o">=</span> <span class="nv">$template</span><span class="p">;</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">variables</span> <span class="o">=</span> <span class="nv">$variables</span><span class="p">;</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">render</span><span class="p">()</span> <span class="p">{</span>
    <span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">variables</span><span class="p">[</span><span class="s1">&#39;new&#39;</span><span class="p">])</span> <span class="p">{</span>
      <span class="k">echo</span> <span class="s1">&#39;controller rendering new response&#39;</span><span class="p">;</span>
    <span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
      <span class="k">echo</span> <span class="s1">&#39;controller rendering old response&#39;</span><span class="p">;</span>
    <span class="p">}</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-3-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-3-result">
          <div class="apav-result-box">
            <p>
              In this code are two security bugs.
              A file inclusion vulnerability is triggered by the call of <code class="inline">class_exists()</code>
              in line 8. Here, the existance of a user supplied class name is checked. This automatically invokes
              the custom autoloader in line 1 in case the class name is unknown which will try to include unknown
              classes. An attacker can abuse this file inclusion by using a path traversal attack. The lookup for
              the class name <code class="inline">../../../../etc/passwd</code> will leak the passwd file.
              The attack only works until version 5.3 of PHP.
              <br/>
              But there is a second bug that also works in recent PHP versions. In line 9, the class
              name is used for a new object instantiation. The first argument of its constructor is
              under the attackers control as well. Arbitrary constructors of the PHP code base can be
              called. Even if the code itself does not contain a vulnerable constructor, PHP's built-in
              class <code class="inline">SimpleXMLElement</code> can be used for an XXE attack
              that also leads to the exposure of files. A real world example of this exploit can
              be found in our
              <a href="https://blog.ripstech.com/2017/shopware-php-object-instantiation-to-blind-xxe/">blog post</a>.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day3.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 4 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-4">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 4 - False Beard</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span><span class="lnt">17
</span><span class="lnt">18
</span><span class="lnt">19
</span><span class="lnt">20
</span><span class="lnt">21
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="k">class</span> <span class="nc">Login</span> <span class="p">{</span>
  <span class="k">public</span> <span class="k">function</span> <span class="fm">__construct</span><span class="p">(</span><span class="nv">$user</span><span class="p">,</span> <span class="nv">$pass</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">loginViaXml</span><span class="p">(</span><span class="nv">$user</span><span class="p">,</span> <span class="nv">$pass</span><span class="p">);</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">loginViaXml</span><span class="p">(</span><span class="nv">$user</span><span class="p">,</span> <span class="nv">$pass</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">if</span> <span class="p">(</span>
      <span class="p">(</span><span class="o">!</span><span class="nx">strpos</span><span class="p">(</span><span class="nv">$user</span><span class="p">,</span> <span class="s1">&#39;&lt;&#39;</span><span class="p">)</span> <span class="o">||</span> <span class="o">!</span><span class="nx">strpos</span><span class="p">(</span><span class="nv">$user</span><span class="p">,</span> <span class="s1">&#39;&gt;&#39;</span><span class="p">))</span> <span class="o">&amp;&amp;</span>
      <span class="p">(</span><span class="o">!</span><span class="nx">strpos</span><span class="p">(</span><span class="nv">$pass</span><span class="p">,</span> <span class="s1">&#39;&lt;&#39;</span><span class="p">)</span> <span class="o">||</span> <span class="o">!</span><span class="nx">strpos</span><span class="p">(</span><span class="nv">$pass</span><span class="p">,</span> <span class="s1">&#39;&gt;&#39;</span><span class="p">))</span>
    <span class="p">)</span> <span class="p">{</span>
      <span class="nv">$format</span> <span class="o">=</span> <span class="s1">&#39;&lt;?xml version=&#34;1.0&#34;?&gt;&#39;</span> <span class="o">.</span>
        <span class="s1">&#39;&lt;user v=&#34;%s&#34;/&gt;&lt;pass v=&#34;%s&#34;/&gt;&#39;</span><span class="p">;</span>
      <span class="nv">$xml</span> <span class="o">=</span> <span class="nx">sprintf</span><span class="p">(</span><span class="nv">$format</span><span class="p">,</span> <span class="nv">$user</span><span class="p">,</span> <span class="nv">$pass</span><span class="p">);</span>
      <span class="nv">$xmlElement</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">SimpleXMLElement</span><span class="p">(</span><span class="nv">$xml</span><span class="p">);</span>
      <span class="c1">// Perform the actual login.
</span><span class="c1"></span>      <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">login</span><span class="p">(</span><span class="nv">$xmlElement</span><span class="p">);</span>
    <span class="p">}</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">new</span> <span class="nx">Login</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;username&#39;</span><span class="p">],</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;password&#39;</span><span class="p">]);</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-4-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-4-result">
          <div class="apav-result-box">
            <p>
              This challenge suffers from an XML injection vulnerability in line 14. An attacker can
              manipulate the XML structure and hence bypass the authentication. There is an attempt to prevent
              exploitation in lines 8 and 9 by searching for angle brackets but the check can be bypassed
              with a specifically crafted payload.
              The bug in this code is the automatic casting of variables in PHP. The PHP built-in function
              <code class="inline">strpos()</code> returns the numeric position of the looked up character.
              This can be <code class="inline">0</code> if the first character is the one searched for.
              The 0 is then type-casted to a boolean
              <code class="inline">false</code> for the <code class="inline">if</code>
              comparison which renders the overall constraint to true. A possible
              payload could look like
              <code class="inline">user=&lt;&quot;&gt;&lt;injected-tag%20property=&quot;&pass=&lt;injected-tag&gt;</code>.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>

          <a target="_blank" href='day4.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 5 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-5">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 5 - Postcard</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span><span class="lnt">17
</span><span class="lnt">18
</span><span class="lnt">19
</span><span class="lnt">20
</span><span class="lnt">21
</span><span class="lnt">22
</span><span class="lnt">23
</span><span class="lnt">24
</span><span class="lnt">25
</span><span class="lnt">26
</span><span class="lnt">27
</span><span class="lnt">28
</span><span class="lnt">29
</span><span class="lnt">30
</span><span class="lnt">31
</span><span class="lnt">32
</span><span class="lnt">33
</span><span class="lnt">34
</span><span class="lnt">35
</span><span class="lnt">36
</span><span class="lnt">37
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="k">class</span> <span class="nc">Mailer</span> <span class="p">{</span>
  <span class="k">private</span> <span class="k">function</span> <span class="nf">sanitize</span><span class="p">(</span><span class="nv">$email</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">filter_var</span><span class="p">(</span><span class="nv">$email</span><span class="p">,</span> <span class="nx">FILTER_VALIDATE_EMAIL</span><span class="p">))</span> <span class="p">{</span>
      <span class="k">return</span> <span class="s1">&#39;&#39;</span><span class="p">;</span>
    <span class="p">}</span>

    <span class="k">return</span> <span class="nx">escapeshellarg</span><span class="p">(</span><span class="nv">$email</span><span class="p">);</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">send</span><span class="p">(</span><span class="nv">$data</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">isset</span><span class="p">(</span><span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;to&#39;</span><span class="p">]))</span> <span class="p">{</span>
      <span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;to&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;none@ripstech.com&#39;</span><span class="p">;</span>
    <span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
      <span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;to&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sanitize</span><span class="p">(</span><span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;to&#39;</span><span class="p">]);</span>
    <span class="p">}</span>

    <span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">isset</span><span class="p">(</span><span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;from&#39;</span><span class="p">]))</span> <span class="p">{</span>
      <span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;from&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;none@ripstech.com&#39;</span><span class="p">;</span>
    <span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
      <span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;from&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sanitize</span><span class="p">(</span><span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;from&#39;</span><span class="p">]);</span>
    <span class="p">}</span>

    <span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">isset</span><span class="p">(</span><span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;subject&#39;</span><span class="p">]))</span> <span class="p">{</span>
      <span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;subject&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;No Subject&#39;</span><span class="p">;</span>
    <span class="p">}</span>

    <span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">isset</span><span class="p">(</span><span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;message&#39;</span><span class="p">]))</span> <span class="p">{</span>
      <span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;message&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span>
    <span class="p">}</span>

    <span class="nx">mail</span><span class="p">(</span><span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;to&#39;</span><span class="p">],</span> <span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;subject&#39;</span><span class="p">],</span> <span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;message&#39;</span><span class="p">],</span>
      <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s2">&#34;-f&#34;</span> <span class="o">.</span> <span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;from&#39;</span><span class="p">]);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="nv">$mailer</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Mailer</span><span class="p">();</span>
<span class="nv">$mailer</span><span class="o">-&gt;</span><span class="na">send</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">);</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-5-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-5-result">
          <div class="apav-result-box">
            <p>
              This challenge suffers from a command execution vulnerability in line 31. The fifth
              parameter of mail, in this case the variable <code class="inline">$_POST['from']</code>,
              is appended to the sendmail command that is executed to send out the email. It is not
              possible to execute arbitrary commands here but it is possible to append arbitrary new parameters to sendmail.
              This can be abused to create a PHP backdoor in the web directory through the log files of sendmail.<br />
              There are 2 insufficient protections in place that try to prevent successful exploitation. The method
              <code class="inline">sanitize()</code> first checks in line 3 if the e-mail address is valid. However, not all
              characters that are necessary to exploit the security issue in <code class="inline">mail()</code> are forbidden
              by this filter. It allows the usage of escaped whitespaces nested in double quotes. In line 7 the e-mail address
              gets sanitized with <code class="inline">escapeshellarg()</code>. This would be sufficient if PHP would not escape
              the fifth parameter internally with <code class="inline">escapeshellcmd()</code>. Since it does escape the parameter
              again, the <code class="inline">escapeshellcmd()</code> allows an attacker to break out of the
              <code class="inline">escapeshellarg()</code>. More information, details, and a PoC can be found in our blog post
              <a href="https://blog.ripstech.com/2017/why-mail-is-dangerous-in-php/">“Why mail() is dangerous in PHP”</a>.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day5.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 6 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-6">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 6 - Frost Pattern</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span><span class="lnt">17
</span><span class="lnt">18
</span><span class="lnt">19
</span><span class="lnt">20
</span><span class="lnt">21
</span><span class="lnt">22
</span><span class="lnt">23
</span><span class="lnt">24
</span><span class="lnt">25
</span><span class="lnt">26
</span><span class="lnt">27
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="k">class</span> <span class="nc">TokenStorage</span> <span class="p">{</span>
  <span class="k">public</span> <span class="k">function</span> <span class="nf">performAction</span><span class="p">(</span><span class="nv">$action</span><span class="p">,</span> <span class="nv">$data</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">switch</span> <span class="p">(</span><span class="nv">$action</span><span class="p">)</span> <span class="p">{</span>
      <span class="k">case</span> <span class="s1">&#39;create&#39;</span><span class="o">:</span>
        <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">createToken</span><span class="p">(</span><span class="nv">$data</span><span class="p">);</span>
        <span class="k">break</span><span class="p">;</span>
      <span class="k">case</span> <span class="s1">&#39;delete&#39;</span><span class="o">:</span>
        <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">clearToken</span><span class="p">(</span><span class="nv">$data</span><span class="p">);</span>
        <span class="k">break</span><span class="p">;</span>
      <span class="k">default</span><span class="o">:</span>
        <span class="k">throw</span> <span class="k">new</span> <span class="nx">Exception</span><span class="p">(</span><span class="s1">&#39;Unknown action&#39;</span><span class="p">);</span>
    <span class="p">}</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">createToken</span><span class="p">(</span><span class="nv">$seed</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$token</span> <span class="o">=</span> <span class="nx">md5</span><span class="p">(</span><span class="nv">$seed</span><span class="p">);</span>
    <span class="nx">file_put_contents</span><span class="p">(</span><span class="s1">&#39;/tmp/tokens/&#39;</span> <span class="o">.</span> <span class="nv">$token</span><span class="p">,</span> <span class="s1">&#39;...data&#39;</span><span class="p">);</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">clearToken</span><span class="p">(</span><span class="nv">$token</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$file</span> <span class="o">=</span> <span class="nx">preg_replace</span><span class="p">(</span><span class="s2">&#34;/[^a-z.-_]/&#34;</span><span class="p">,</span> <span class="s2">&#34;&#34;</span><span class="p">,</span> <span class="nv">$token</span><span class="p">);</span>
    <span class="nx">unlink</span><span class="p">(</span><span class="s1">&#39;/tmp/tokens/&#39;</span> <span class="o">.</span> <span class="nv">$file</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="nv">$storage</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">TokenStorage</span><span class="p">();</span>
<span class="nv">$storage</span><span class="o">-&gt;</span><span class="na">performAction</span><span class="p">(</span><span class="nv">$_GET</span><span class="p">[</span><span class="s1">&#39;action&#39;</span><span class="p">],</span> <span class="nv">$_GET</span><span class="p">[</span><span class="s1">&#39;data&#39;</span><span class="p">]);</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-6-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-6-result">
          <div class="apav-result-box">
            <p>
              This challenge contains a file delete vulnerability. The bug causing this issue is a non-escaped
              hyphen character (<code class="inline">-</code>) in the regular expression that is
              used in the <code class="inline">preg_replace()</code> call in line 21. If the hyphen is not
              escaped, it is used as a range indicator, leading to a replacement of any character that
              is not a-z or an ASCII character in the range between dot (<code class="inline">46</code>)
              and underscore (<code class="inline">95</code>). Thus dot and slash can be used for
              directory traversal and (almost) arbitrary files can be deleted, for example with the
              query parameters <code class="inline">action=delete&data=../../config.php</code>.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day6.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 7 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-7">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 7 - Bells</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span><span class="lnt">17
</span><span class="lnt">18
</span><span class="lnt">19
</span><span class="lnt">20
</span><span class="lnt">21
</span><span class="lnt">22
</span><span class="lnt">23
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="k">function</span> <span class="nf">getUser</span><span class="p">(</span><span class="nv">$id</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">global</span> <span class="nv">$config</span><span class="p">,</span> <span class="nv">$db</span><span class="p">;</span>
  <span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">is_resource</span><span class="p">(</span><span class="nv">$db</span><span class="p">))</span> <span class="p">{</span>
    <span class="nv">$db</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">MySQLi</span><span class="p">(</span>
      <span class="nv">$config</span><span class="p">[</span><span class="s1">&#39;dbhost&#39;</span><span class="p">],</span>
      <span class="nv">$config</span><span class="p">[</span><span class="s1">&#39;dbuser&#39;</span><span class="p">],</span>
      <span class="nv">$config</span><span class="p">[</span><span class="s1">&#39;dbpass&#39;</span><span class="p">],</span>
      <span class="nv">$config</span><span class="p">[</span><span class="s1">&#39;dbname&#39;</span><span class="p">]</span>
    <span class="p">);</span>
  <span class="p">}</span>
  <span class="nv">$sql</span> <span class="o">=</span> <span class="s2">&#34;SELECT username FROM users WHERE id = ?&#34;</span><span class="p">;</span>
  <span class="nv">$stmt</span> <span class="o">=</span> <span class="nv">$db</span><span class="o">-&gt;</span><span class="na">prepare</span><span class="p">(</span><span class="nv">$sql</span><span class="p">);</span>
  <span class="nv">$stmt</span><span class="o">-&gt;</span><span class="na">bind_param</span><span class="p">(</span><span class="s1">&#39;i&#39;</span><span class="p">,</span> <span class="nv">$id</span><span class="p">);</span>
  <span class="nv">$stmt</span><span class="o">-&gt;</span><span class="na">bind_result</span><span class="p">(</span><span class="nv">$name</span><span class="p">);</span>
  <span class="nv">$stmt</span><span class="o">-&gt;</span><span class="na">execute</span><span class="p">();</span>
  <span class="nv">$stmt</span><span class="o">-&gt;</span><span class="na">fetch</span><span class="p">();</span>
  <span class="k">return</span> <span class="nv">$name</span><span class="p">;</span>
<span class="p">}</span>

<span class="nv">$var</span> <span class="o">=</span> <span class="nx">parse_url</span><span class="p">(</span><span class="nv">$_SERVER</span><span class="p">[</span><span class="s1">&#39;HTTP_REFERER&#39;</span><span class="p">]);</span>
<span class="nx">parse_str</span><span class="p">(</span><span class="nv">$var</span><span class="p">[</span><span class="s1">&#39;query&#39;</span><span class="p">]);</span>
<span class="nv">$currentUser</span> <span class="o">=</span> <span class="nx">getUser</span><span class="p">(</span><span class="nv">$id</span><span class="p">);</span>
<span class="k">echo</span> <span class="s1">&#39;&lt;h1&gt;&#39;</span><span class="o">.</span><span class="nx">htmlspecialchars</span><span class="p">(</span><span class="nv">$currentUser</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;&lt;/h1&gt;&#39;</span><span class="p">;</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-7-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-7-result">
          <div class="apav-result-box">
            <p>
              This challenge suffers from a connection string injection vulnerability in line 4. It occurs
              because of the <code class="inline">parse_str()</code> call in line 21 that behaves very similar to register globals.
              Query parameters from the referrer are extracted to variables in the current scope, thus we can
              control the global variable <code class="inline">$config</code> inside of
              <code class="inline">getUser()</code> in lines 5 to 8. To exploit this vulnerability we can
              connect to our own MySQL server and return arbitrary values for username, for example with the
              referrer
              <code class="inline">http://host/?config[dbhost]=10.0.0.5&config[dbuser]=root&config[dbpass]=root&config[dbname]=malicious&id=1</code>.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day7.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 8 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-8">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 8 - Candle</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="nx">header</span><span class="p">(</span><span class="s2">&#34;Content-Type: text/plain&#34;</span><span class="p">);</span>

<span class="k">function</span> <span class="nf">complexStrtolower</span><span class="p">(</span><span class="nv">$regex</span><span class="p">,</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">return</span> <span class="nx">preg_replace</span><span class="p">(</span>
    <span class="s1">&#39;/(&#39;</span> <span class="o">.</span> <span class="nv">$regex</span> <span class="o">.</span> <span class="s1">&#39;)/ei&#39;</span><span class="p">,</span>
    <span class="s1">&#39;strtolower(&#34;\\1&#34;)&#39;</span><span class="p">,</span>
    <span class="nv">$value</span>
  <span class="p">);</span>
<span class="p">}</span>

<span class="k">foreach</span> <span class="p">(</span><span class="nv">$_GET</span> <span class="k">as</span> <span class="nv">$regex</span> <span class="o">=&gt;</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">echo</span> <span class="nx">complexStrtolower</span><span class="p">(</span><span class="nv">$regex</span><span class="p">,</span> <span class="nv">$value</span><span class="p">)</span> <span class="o">.</span> <span class="s2">&#34;</span><span class="se">\n</span><span class="s2">&#34;</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-8-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-8-result">
          <div class="apav-result-box">
            <p>
              This challenge contains a code injection vulnerability in line 4. Prior to PHP 7 the
              operation <code class="inline">preg_replace()</code> contained an eval modifier, short
              <code class="inline">e</code>. If the modifier is set, the second parameter (replacement) is
              treated as PHP code. We do not have a direct injection point into the second parameter
              but we can control the value of <code class="inline">\\1</code>, as it references the matched
              regular expression. It is not possible to escape out of the
              <code class="inline">strtolower()</code> call but since the referenced value is inside of
              double quotes, we can use PHP’s curly syntax to inject other function calls.
              An attack could look like this: <code class="inline">/?.*={${phpinfo()}}</code>.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>

          <a target="_blank" href='day8.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 9 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-9">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 9 - Rabbit</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span><span class="lnt">17
</span><span class="lnt">18
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="k">class</span> <span class="nc">LanguageManager</span> <span class="p">{</span>
  <span class="k">public</span> <span class="k">function</span> <span class="nf">loadLanguage</span><span class="p">()</span> <span class="p">{</span>
    <span class="nv">$lang</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getBrowserLanguage</span><span class="p">();</span>
    <span class="nv">$sanitizedLang</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sanitizeLanguage</span><span class="p">(</span><span class="nv">$lang</span><span class="p">);</span>
    <span class="k">require_once</span><span class="p">(</span><span class="s2">&#34;/lang/</span><span class="si">$sanitizedLang</span><span class="s2">&#34;</span><span class="p">);</span>
  <span class="p">}</span>

  <span class="k">private</span> <span class="k">function</span> <span class="nf">getBrowserLanguage</span><span class="p">()</span> <span class="p">{</span>
    <span class="nv">$lang</span> <span class="o">=</span> <span class="nv">$_SERVER</span><span class="p">[</span><span class="s1">&#39;HTTP_ACCEPT_LANGUAGE&#39;</span><span class="p">]</span> <span class="o">??</span> <span class="s1">&#39;en&#39;</span><span class="p">;</span>
    <span class="k">return</span> <span class="nv">$lang</span><span class="p">;</span>
  <span class="p">}</span>

  <span class="k">private</span> <span class="k">function</span> <span class="nf">sanitizeLanguage</span><span class="p">(</span><span class="nv">$language</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">return</span> <span class="nx">str_replace</span><span class="p">(</span><span class="s1">&#39;../&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$language</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="p">(</span><span class="k">new</span> <span class="nx">LanguageManager</span><span class="p">())</span><span class="o">-&gt;</span><span class="na">loadLanguage</span><span class="p">();</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-9-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-9-result">
          <div class="apav-result-box">
            <p>
              This challenge contains a file inclusion vulnerability that can allow an attacker to
              execute arbitrary code on the server or to leak sensitive files. The bug is in the
              sanitization function in line 18. The replacement of the <code class="inline">../</code>
              string is not executed recursively. This allows the attacker to simply use the character
              sequence <code class="inline">....//</code> or <code class="inline">..././</code> that
              after replacement will end in <code class="inline">../</code> again. Thus, changing the
              path to the included language file via path traversal is possible. For example, the
              system's passwd file can be leaked by setting the following payload in the Accept-Language
              HTTP request header:
              <code class="inline">.//....//....//etc/passwd</code>.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day9.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 10 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-10">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 10 - Anticipation</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="nx">extract</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">);</span>

<span class="k">function</span> <span class="nf">goAway</span><span class="p">()</span> <span class="p">{</span>
  <span class="nx">error_log</span><span class="p">(</span><span class="s2">&#34;Hacking attempt.&#34;</span><span class="p">);</span>
  <span class="nx">header</span><span class="p">(</span><span class="s1">&#39;Location: /error/&#39;</span><span class="p">);</span>
<span class="p">}</span>

<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">isset</span><span class="p">(</span><span class="nv">$pi</span><span class="p">)</span> <span class="o">||</span> <span class="o">!</span><span class="nx">is_numeric</span><span class="p">(</span><span class="nv">$pi</span><span class="p">))</span> <span class="p">{</span>
  <span class="nx">goAway</span><span class="p">();</span>
<span class="p">}</span>

<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">assert</span><span class="p">(</span><span class="s2">&#34;(int)</span><span class="si">$pi</span><span class="s2"> == 3&#34;</span><span class="p">))</span> <span class="p">{</span>
  <span class="k">echo</span> <span class="s2">&#34;This is not pi.&#34;</span><span class="p">;</span>
<span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
  <span class="k">echo</span> <span class="s2">&#34;This might be pi.&#34;</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-10-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-10-result">
          <div class="apav-result-box">
            <p>
              This challenge contains a code injection vulnerability in line 12 that can be used by an
              attacker to execute arbitrary PHP code on the web server. The operation
              <code class="inline">assert()</code> evaluates PHP
              code and it contains user input. In line 1, all POST parameters are instantiated as global variables
              by PHP's built-in function <code class="inline">extract()</code>. This can lead to severe problems
              itself but in this challenge it is only used for a variety of sources. It enables the attacker to
              set the <code class="inline">$pi</code> variable directly via POST Parameter. In line 8 there is a
              check to verify if the input is numeric and if not the user is redirected to an error page via the
              <code class="inline">goAway()</code> function. However, after the redirect in line 5 the PHP
              script continues running because there is no
              <code class="inline">exit()</code> call. Thus, user provided PHP code in the
              <code class="inline">pi</code> parameter is always executed, e.g.
              <code class="inline">pi=phpinfo()</code>.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>

          <a target="_blank" href='day10.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 11 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-11">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 11 - Pumpkin Pie</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span><span class="lnt">17
</span><span class="lnt">18
</span><span class="lnt">19
</span><span class="lnt">20
</span><span class="lnt">21
</span><span class="lnt">22
</span><span class="lnt">23
</span><span class="lnt">24
</span><span class="lnt">25
</span><span class="lnt">26
</span><span class="lnt">27
</span><span class="lnt">28
</span><span class="lnt">29
</span><span class="lnt">30
</span><span class="lnt">31
</span><span class="lnt">32
</span><span class="lnt">33
</span><span class="lnt">34
</span><span class="lnt">35
</span><span class="lnt">36
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="k">class</span> <span class="nc">Template</span> <span class="p">{</span>
  <span class="k">public</span> <span class="nv">$cacheFile</span> <span class="o">=</span> <span class="s1">&#39;/tmp/cachefile&#39;</span><span class="p">;</span>
  <span class="k">public</span> <span class="nv">$template</span> <span class="o">=</span> <span class="s1">&#39;&lt;div&gt;Welcome back %s&lt;/div&gt;&#39;</span><span class="p">;</span>

  <span class="k">public</span> <span class="k">function</span> <span class="fm">__construct</span><span class="p">(</span><span class="nv">$data</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$data</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">loadData</span><span class="p">(</span><span class="nv">$data</span><span class="p">);</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">render</span><span class="p">(</span><span class="nv">$data</span><span class="p">);</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">loadData</span><span class="p">(</span><span class="nv">$data</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">if</span> <span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="nv">$data</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">2</span><span class="p">)</span> <span class="o">!==</span> <span class="s1">&#39;O:&#39;</span>
      <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nx">preg_match</span><span class="p">(</span><span class="s1">&#39;/O:\d:\/&#39;</span><span class="p">,</span> <span class="nv">$data</span><span class="p">))</span> <span class="p">{</span>
      <span class="k">return</span> <span class="nx">unserialize</span><span class="p">(</span><span class="nv">$data</span><span class="p">);</span>
    <span class="p">}</span>
    <span class="k">return</span> <span class="p">[];</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">createCache</span><span class="p">(</span><span class="nv">$file</span> <span class="o">=</span> <span class="k">null</span><span class="p">,</span> <span class="nv">$tpl</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$file</span> <span class="o">=</span> <span class="nv">$file</span> <span class="o">??</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cacheFile</span><span class="p">;</span>
    <span class="nv">$tpl</span> <span class="o">=</span> <span class="nv">$tpl</span> <span class="o">??</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="p">;</span>
    <span class="nx">file_put_contents</span><span class="p">(</span><span class="nv">$file</span><span class="p">,</span> <span class="nv">$tpl</span><span class="p">);</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">render</span><span class="p">(</span><span class="nv">$data</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">echo</span> <span class="nx">sprintf</span><span class="p">(</span>
      <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="p">,</span>
      <span class="nx">htmlspecialchars</span><span class="p">(</span><span class="nv">$data</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">])</span>
    <span class="p">);</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="fm">__destruct</span><span class="p">()</span> <span class="p">{</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">createCache</span><span class="p">();</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">new</span> <span class="nx">Template</span><span class="p">(</span><span class="nv">$_COOKIE</span><span class="p">[</span><span class="s1">&#39;data&#39;</span><span class="p">]);</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-11-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-11-result">
          <div class="apav-result-box">
            <p>
              This challenge contains an PHP object injection vulnerability. In line 13 an attacker is able to pass user
              input into the <code class="inline">unserialize()</code> function by altering his cookie <em>data</em>.
              There are two checks in line 11 and 12 that try to prevent the deserialization of objects.
              The first check can be easily circumvented, for example by injecting an object into an array,
              leading to a payload string beginning with
              <code class="inline">a:1:</code> instead of <code class="inline">O:</code>.
              The second check can be bypassed by abusing PHP's flexible serialization syntax.
              It is possible to use the syntax <code class="inline">O:+1:</code> to bypass this regex.
              Finally, this means an attacker can inject an object of class <code class="inline">Template</code>
              into the application.
              After the serialized form is deserialized and the Template object is instantiated, its destructor
              is called when the script terminates (line 31).
              Now, the attacker controlled properties <code class="inline">cacheFile</code> and
              <code class="inline">template</code> of the injected object are used to write to a file in line 21.
              Thus, the attacker can create arbitraries files on the file system, for example a PHP shell in
              the document root:
              <code class="inline">a:1:{i:0;O:%2b8:"Template":2:{s:9:"cacheFile";s:14:"/var/www/a.php";s:8:"template";s:16:"&lt;?php%20phpinfo();";}}</code>
              More information about this attack can be found
              <a href="https://blog.ripstech.com/tags/php-object-injection/" target="_blank" rel="noopener">in our blog posts</a>.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>

          <a target="_blank" href='day11.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 12 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-12">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 12 - String Lights</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="nv">$sanitized</span> <span class="o">=</span> <span class="p">[];</span>

<span class="k">foreach</span> <span class="p">(</span><span class="nv">$_GET</span> <span class="k">as</span> <span class="nv">$key</span> <span class="o">=&gt;</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">{</span>
  <span class="nv">$sanitized</span><span class="p">[</span><span class="nv">$key</span><span class="p">]</span> <span class="o">=</span> <span class="nx">intval</span><span class="p">(</span><span class="nv">$value</span><span class="p">);</span>
<span class="p">}</span>

<span class="nv">$queryParts</span> <span class="o">=</span> <span class="nx">array_map</span><span class="p">(</span><span class="k">function</span> <span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">return</span> <span class="nv">$key</span> <span class="o">.</span> <span class="s1">&#39;=&#39;</span> <span class="o">.</span> <span class="nv">$value</span><span class="p">;</span>
<span class="p">},</span> <span class="nx">array_keys</span><span class="p">(</span><span class="nv">$sanitized</span><span class="p">),</span> <span class="nx">array_values</span><span class="p">(</span><span class="nv">$sanitized</span><span class="p">));</span>

<span class="nv">$query</span> <span class="o">=</span> <span class="nx">implode</span><span class="p">(</span><span class="s1">&#39;&amp;&#39;</span><span class="p">,</span> <span class="nv">$queryParts</span><span class="p">);</span>

<span class="k">echo</span> <span class="s2">&#34;&lt;a href=&#39;/images/size.php?&#34;</span> <span class="o">.</span>
  <span class="nx">htmlentities</span><span class="p">(</span><span class="nv">$query</span><span class="p">)</span> <span class="o">.</span> <span class="s2">&#34;&#39;&gt;link&lt;/a&gt;&#34;</span><span class="p">;</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-12-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-12-result">
          <div class="apav-result-box">
            <p>
              There is a cross-site scripting vulnerability in line 13. This bug depends on the fact that
              the keys of the <code class="inline">$_GET</code> array (the GET parameter names) are not
              sufficiently sanitized in the
              code. Both the keys and the sanitized GET values are passed to the
              <code class="inline">href</code> attribute of the <code class="inline">&lt;a&gt;</code>
              tag
              as a concatenated string. The sanitizer <code class="inline">htmlentities()</code> is used,
              however, single quotes are not affected by default by this built-in function. Hence, an
              attacker is able to perform an XSS attack against the
              user, for example using the following query parameter that breaks the
              <code class="inline">href</code> attribute and appends an eventhandler with JavaScript code:
              <code class="inline">/?a'onclick%3dalert(1)%2f%2f=c</code>.
              Note that the payload is within the parameter name, not the parameter value.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day12.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 13 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-13">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 13 - Turkey Baster</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span><span class="lnt">17
</span><span class="lnt">18
</span><span class="lnt">19
</span><span class="lnt">20
</span><span class="lnt">21
</span><span class="lnt">22
</span><span class="lnt">23
</span><span class="lnt">24
</span><span class="lnt">25
</span><span class="lnt">26
</span><span class="lnt">27
</span><span class="lnt">28
</span><span class="lnt">29
</span><span class="lnt">30
</span><span class="lnt">31
</span><span class="lnt">32
</span><span class="lnt">33
</span><span class="lnt">34
</span><span class="lnt">35
</span><span class="lnt">36
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="k">class</span> <span class="nc">LoginManager</span> <span class="p">{</span>
  <span class="k">private</span> <span class="nv">$em</span><span class="p">;</span>
  <span class="k">private</span> <span class="nv">$user</span><span class="p">;</span>
  <span class="k">private</span> <span class="nv">$password</span><span class="p">;</span>

  <span class="k">public</span> <span class="k">function</span> <span class="fm">__construct</span><span class="p">(</span><span class="nv">$user</span><span class="p">,</span> <span class="nv">$password</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">em</span> <span class="o">=</span> <span class="nx">DoctrineManager</span><span class="o">::</span><span class="na">getEntityManager</span><span class="p">();</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">user</span> <span class="o">=</span> <span class="nv">$user</span><span class="p">;</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">password</span> <span class="o">=</span> <span class="nv">$password</span><span class="p">;</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">isValid</span><span class="p">()</span> <span class="p">{</span>
    <span class="nv">$user</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sanitizeInput</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">user</span><span class="p">);</span>
    <span class="nv">$pass</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sanitizeInput</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">password</span><span class="p">);</span>

    <span class="nv">$queryBuilder</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">em</span><span class="o">-&gt;</span><span class="na">createQueryBuilder</span><span class="p">()</span>
      <span class="o">-&gt;</span><span class="na">select</span><span class="p">(</span><span class="s2">&#34;COUNT(p)&#34;</span><span class="p">)</span>
      <span class="o">-&gt;</span><span class="na">from</span><span class="p">(</span><span class="s2">&#34;User&#34;</span><span class="p">,</span> <span class="s2">&#34;u&#34;</span><span class="p">)</span>
      <span class="o">-&gt;</span><span class="na">where</span><span class="p">(</span><span class="s2">&#34;user = &#39;</span><span class="si">$user</span><span class="s2">&#39; AND password = &#39;</span><span class="si">$pass</span><span class="s2">&#39;&#34;</span><span class="p">);</span>
    <span class="nv">$query</span> <span class="o">=</span> <span class="nv">$queryBuilder</span><span class="o">-&gt;</span><span class="na">getQuery</span><span class="p">();</span>
    <span class="k">return</span> <span class="nx">boolval</span><span class="p">(</span><span class="nv">$query</span><span class="o">-&gt;</span><span class="na">getSingleScalarResult</span><span class="p">());</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">sanitizeInput</span><span class="p">(</span><span class="nv">$input</span><span class="p">,</span> <span class="nv">$length</span> <span class="o">=</span> <span class="mi">20</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$input</span> <span class="o">=</span> <span class="nx">addslashes</span><span class="p">(</span><span class="nv">$input</span><span class="p">);</span>
    <span class="k">if</span> <span class="p">(</span><span class="nx">strlen</span><span class="p">(</span><span class="nv">$input</span><span class="p">)</span> <span class="o">&gt;</span> <span class="nv">$length</span><span class="p">)</span> <span class="p">{</span>
      <span class="nv">$input</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$input</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nv">$length</span><span class="p">);</span>
    <span class="p">}</span>
    <span class="k">return</span> <span class="nv">$input</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="nv">$auth</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">LoginManager</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;user&#39;</span><span class="p">],</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;passwd&#39;</span><span class="p">]);</span>
<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$auth</span><span class="o">-&gt;</span><span class="na">isValid</span><span class="p">())</span> <span class="p">{</span>
  <span class="k">exit</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-13-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-13-result">
          <div class="apav-result-box">
            <p>
              Today's challenge contains a DQL (Doctrine Query Language) injection vulnerability in line 19.
              A DQL injection is similar to a SQL injection but more limited, nonetheless the
              <code class="inline">where()</code> method of Doctrine is vulnerable. In line 13 and 14
              sanitization is added to the input, however, the <code class="inline">sanitizeInput()</code>
              method has a bug. First, it uses <code class="inline">addslashes()</code> for escaping
              relevant characters by adding a backslash \ infront of them. In this case if we pass
              a \ as input, it get escaped to \\. But then, the <code class="inline">substr()</code>
              function is used to truncate the escaped string. This enables an attacker to send a
              string that is long enough that the escaped backslash is cut off and we are left with
              a single \ at the end of the string. This will then break the WHERE statement and
              allows the injection of own DQL syntax, for example the condition
              <code class="inline">OR 1=1</code> that is always true and bypasses the authentication:
              <code class="inline">user=1234567890123456789\&passwd=%20OR%201=1-</code>.
              The resulting WHERE statement will look like
              <code class="inline">user = '1234567890123456789\' AND password = ' OR 1=1-'</code>
              in DQL. Note how the backslash confuses the quotes and allows to inject DQL into the password value.
              The resulting query does not look valid because of the trailing slash. Fortunately,
              Doctrine closes the last single quote on its own, so the resulting query looks like
              <code class="inline">OR 1=1-''</code>.<br />

              To avoid DQL injections always use bound parameters for dynamic conditions. Never try
              to secure a DQL query with <code class="inline">addslashes()</code> or similar functions.
              Additionally, the password should be stored hashed in the database, for example in the BCrypt format.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day13.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 14 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-14">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 14 - Snowman</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span><span class="lnt">17
</span><span class="lnt">18
</span><span class="lnt">19
</span><span class="lnt">20
</span><span class="lnt">21
</span><span class="lnt">22
</span><span class="lnt">23
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="k">class</span> <span class="nc">Carrot</span> <span class="p">{</span>
  <span class="k">const</span> <span class="no">EXTERNAL_DIRECTORY</span> <span class="o">=</span> <span class="s1">&#39;/tmp/&#39;</span><span class="p">;</span>
  <span class="k">private</span> <span class="nv">$id</span><span class="p">;</span>
  <span class="k">private</span> <span class="nv">$lost</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span>
  <span class="k">private</span> <span class="nv">$bought</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span>

  <span class="k">public</span> <span class="k">function</span> <span class="fm">__construct</span><span class="p">(</span><span class="nv">$input</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">id</span> <span class="o">=</span> <span class="nx">rand</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span> <span class="mi">1000</span><span class="p">);</span>

    <span class="k">foreach</span> <span class="p">(</span><span class="nv">$input</span> <span class="k">as</span> <span class="nv">$field</span> <span class="o">=&gt;</span> <span class="nv">$count</span><span class="p">)</span> <span class="p">{</span>
      <span class="nv">$this</span><span class="o">-&gt;</span><span class="nv">$field</span> <span class="o">=</span> <span class="nv">$count</span><span class="o">++</span><span class="p">;</span>
    <span class="p">}</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="fm">__destruct</span><span class="p">()</span> <span class="p">{</span>
    <span class="nx">file_put_contents</span><span class="p">(</span>
      <span class="nx">self</span><span class="o">::</span><span class="na">EXTERNAL_DIRECTORY</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">id</span><span class="p">,</span>
      <span class="nx">var_export</span><span class="p">(</span><span class="nx">get_object_vars</span><span class="p">(</span><span class="nv">$this</span><span class="p">),</span> <span class="k">true</span><span class="p">)</span>
    <span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="nv">$carrot</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Carrot</span><span class="p">(</span><span class="nv">$_GET</span><span class="p">);</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-14-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-14-result">
          <div class="apav-result-box">
            <p>
              This class is vulnerable to directory traversal because of mass assignment. The constructor
              can be used to set arbitrary class attributes (line 11). By overwriting the
              attribute <code class="inline">$id</code> you
              gain control over the first parameter of
              <code class="inline">file_put_contents()</code> in line 16. With the help of
              <code class="inline">../</code>
              it is possible to target arbitrary files on the system that are writable,
              for example it can be used to create a PHP shell in the document root.
              The values that are send to the class are incremented in line 11 and thus an
              integer after the operation
              is done. The incrementation happens after the assignment though, so the class
              attribute contains the original value of <code class="inline">$count</code>.
              <br />
              To avoid this security issue be vary careful when using reflection based on user input to set variables.
              It is recommended to implement a white-list verfication that contains the names of all variables that can be modified.
              A real world example of a vulnerability that is caused by mass assignment can be found
              <a href="https://blog.ripstech.com/2016/the-state-of-wordpress-security/#podlove-publisher" target="_blank" rel="noopener">in our blog</a>.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day14.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 15 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-15">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 15 - Sleigh Ride</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span><span class="lnt">17
</span><span class="lnt">18
</span><span class="lnt">19
</span><span class="lnt">20
</span><span class="lnt">21
</span><span class="lnt">22
</span><span class="lnt">23
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="k">class</span> <span class="nc">Redirect</span> <span class="p">{</span>
  <span class="k">private</span> <span class="nv">$websiteHost</span> <span class="o">=</span> <span class="s1">&#39;www.example.com&#39;</span><span class="p">;</span>

  <span class="k">private</span> <span class="k">function</span> <span class="nf">setHeaders</span><span class="p">(</span><span class="nv">$url</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$url</span> <span class="o">=</span> <span class="nx">urldecode</span><span class="p">(</span><span class="nv">$url</span><span class="p">);</span>
    <span class="nx">header</span><span class="p">(</span><span class="s2">&#34;Location: </span><span class="si">$url</span><span class="s2">&#34;</span><span class="p">);</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">startRedirect</span><span class="p">(</span><span class="nv">$params</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$parts</span> <span class="o">=</span> <span class="nx">explode</span><span class="p">(</span><span class="s1">&#39;/&#39;</span><span class="p">,</span> <span class="nv">$_SERVER</span><span class="p">[</span><span class="s1">&#39;PHP_SELF&#39;</span><span class="p">]);</span>
    <span class="nv">$baseFile</span> <span class="o">=</span> <span class="nx">end</span><span class="p">(</span><span class="nv">$parts</span><span class="p">);</span>
    <span class="nv">$url</span> <span class="o">=</span> <span class="nx">sprintf</span><span class="p">(</span>
      <span class="s2">&#34;%s?%s&#34;</span><span class="p">,</span>
      <span class="nv">$baseFile</span><span class="p">,</span>
      <span class="nx">http_build_query</span><span class="p">(</span><span class="nv">$params</span><span class="p">)</span>
    <span class="p">);</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setHeaders</span><span class="p">(</span><span class="nv">$url</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">if</span> <span class="p">(</span><span class="nv">$_GET</span><span class="p">[</span><span class="s1">&#39;redirect&#39;</span><span class="p">])</span> <span class="p">{</span>
  <span class="p">(</span><span class="k">new</span> <span class="nx">Redirect</span><span class="p">())</span><span class="o">-&gt;</span><span class="na">startRedirect</span><span class="p">(</span><span class="nv">$_GET</span><span class="p">[</span><span class="s1">&#39;params&#39;</span><span class="p">]);</span>
<span class="p">}</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-15-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-15-result">
          <div class="apav-result-box">
            <p>
              This challenge contains an open redirect vulnerability in line 6. The code takes the input
              from the super global <code class="inline">$_SERVER[‘PHP_SELF’]</code> and splits it at
              the slash character (line 10).
              Then the last part is taken and used to build the new URL that is passed into the
              <code class="inline">header()</code> function.
              An attacker is able to inject his own URL by using url-encoded characters
              that are decoded in line 5. A possible payload could look like
              <code class="inline">/index.php/http:%252f%252fwww.domain.com?redirect=1</code>.
              <br />
              This bug allows an attacker to redirect the user from the original site to a site of the
              attackers will. The attacker then could do phishing, for example he could present a forged login
              screen to grab the credentials of the user for the original site.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day15.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 16 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-16">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 16 - Poem</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span><span class="lnt">17
</span><span class="lnt">18
</span><span class="lnt">19
</span><span class="lnt">20
</span><span class="lnt">21
</span><span class="lnt">22
</span><span class="lnt">23
</span><span class="lnt">24
</span><span class="lnt">25
</span><span class="lnt">26
</span><span class="lnt">27
</span><span class="lnt">28
</span><span class="lnt">29
</span><span class="lnt">30
</span><span class="lnt">31
</span><span class="lnt">32
</span><span class="lnt">33
</span><span class="lnt">34
</span><span class="lnt">35
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="k">class</span> <span class="nc">FTP</span> <span class="p">{</span>
  <span class="k">public</span> <span class="nv">$sock</span><span class="p">;</span>

  <span class="k">public</span> <span class="k">function</span> <span class="fm">__construct</span><span class="p">(</span><span class="nv">$host</span><span class="p">,</span> <span class="nv">$port</span><span class="p">,</span> <span class="nv">$user</span><span class="p">,</span> <span class="nv">$pass</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sock</span> <span class="o">=</span> <span class="nx">fsockopen</span><span class="p">(</span><span class="nv">$host</span><span class="p">,</span> <span class="nv">$port</span><span class="p">);</span>

    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">login</span><span class="p">(</span><span class="nv">$user</span><span class="p">,</span> <span class="nv">$pass</span><span class="p">);</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cleanInput</span><span class="p">();</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">mode</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;mode&#39;</span><span class="p">]);</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">send</span><span class="p">(</span><span class="nv">$_FILES</span><span class="p">[</span><span class="s1">&#39;file&#39;</span><span class="p">]);</span>
  <span class="p">}</span>

  <span class="k">private</span> <span class="k">function</span> <span class="nf">cleanInput</span><span class="p">()</span> <span class="p">{</span>
    <span class="nv">$_GET</span> <span class="o">=</span> <span class="nx">array_map</span><span class="p">(</span><span class="s1">&#39;intval&#39;</span><span class="p">,</span> <span class="nv">$_GET</span><span class="p">);</span>
    <span class="nv">$_POST</span> <span class="o">=</span> <span class="nx">array_map</span><span class="p">(</span><span class="s1">&#39;intval&#39;</span><span class="p">,</span> <span class="nv">$_POST</span><span class="p">);</span>
    <span class="nv">$_COOKIE</span> <span class="o">=</span> <span class="nx">array_map</span><span class="p">(</span><span class="s1">&#39;intval&#39;</span><span class="p">,</span> <span class="nv">$_COOKIE</span><span class="p">);</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">login</span><span class="p">(</span><span class="nv">$username</span><span class="p">,</span> <span class="nv">$password</span><span class="p">)</span> <span class="p">{</span>
    <span class="nx">fwrite</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sock</span><span class="p">,</span> <span class="s2">&#34;USER &#34;</span> <span class="o">.</span> <span class="nv">$username</span> <span class="o">.</span> <span class="s2">&#34;</span><span class="se">\n</span><span class="s2">&#34;</span><span class="p">);</span>
    <span class="nx">fwrite</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sock</span><span class="p">,</span> <span class="s2">&#34;PASS &#34;</span> <span class="o">.</span> <span class="nv">$password</span> <span class="o">.</span> <span class="s2">&#34;</span><span class="se">\n</span><span class="s2">&#34;</span><span class="p">);</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">mode</span><span class="p">(</span><span class="nv">$mode</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">if</span> <span class="p">(</span><span class="nv">$mode</span> <span class="o">==</span> <span class="mi">1</span> <span class="o">||</span> <span class="nv">$mode</span> <span class="o">==</span> <span class="mi">2</span> <span class="o">||</span> <span class="nv">$mode</span> <span class="o">==</span> <span class="mi">3</span><span class="p">)</span> <span class="p">{</span>
      <span class="nx">fputs</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sock</span><span class="p">,</span> <span class="s2">&#34;MODE </span><span class="si">$mode\n</span><span class="s2">&#34;</span><span class="p">);</span>
    <span class="p">}</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">send</span><span class="p">(</span><span class="nv">$data</span><span class="p">)</span> <span class="p">{</span>
    <span class="nx">fputs</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sock</span><span class="p">,</span> <span class="nv">$data</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">new</span> <span class="nx">FTP</span><span class="p">(</span><span class="s1">&#39;localhost&#39;</span><span class="p">,</span> <span class="mi">21</span><span class="p">,</span> <span class="s1">&#39;user&#39;</span><span class="p">,</span> <span class="s1">&#39;password&#39;</span><span class="p">);</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-16-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-16-result">
          <div class="apav-result-box">
            <p>
              This challenge contains two bugs that can be used together to inject data into the
              open FTP connection. The first bug is the usage of <code class="inline">$_REQUEST</code>
              in line 9 while only
              sanitizing <code class="inline">$_GET</code> and <code class="inline">$_POST</code>
              in lines 14 to 16. <code class="inline">$_REQUEST</code> is the combination of
              <code class="inline">$_GET</code>,
              <code class="inline">$_POST</code>, and <code class="inline">$_COOKIE</code>
              but it is only a copy of the values, not a reference. Therefore
              the sanitization of <code class="inline">$_GET</code>, <code class="inline">$_POST</code>,
              and <code class="inline">$_COOKIE</code> alone is not sufficient.
              A real world example of a vulnerability that is caused by a similar confusion can be found
              <a href="https://blog.ripstech.com/2016/the-state-of-wordpress-security/#all-in-one-wp-security-firewall" target="_blank" rel="noopener">in our blog</a>.
              <br /><br />

              The second bug is the usage of the type-unsafe comparison
              <code class="inline">==</code> instead of <code class="inline">===</code>
              in line 25. This enables an
              attacker to inject and execute new commands in the existing connection, for example
              a delete command with the query string <code class="inline">?mode=1%0a%0dDELETE%20test.file</code>.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day16.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 17 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-17">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 17 - Mistletoe</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span><span class="lnt">17
</span><span class="lnt">18
</span><span class="lnt">19
</span><span class="lnt">20
</span><span class="lnt">21
</span><span class="lnt">22
</span><span class="lnt">23
</span><span class="lnt">24
</span><span class="lnt">25
</span><span class="lnt">26
</span><span class="lnt">27
</span><span class="lnt">28
</span><span class="lnt">29
</span><span class="lnt">30
</span><span class="lnt">31
</span><span class="lnt">32
</span><span class="lnt">33
</span><span class="lnt">34
</span><span class="lnt">35
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="k">class</span> <span class="nc">RealSecureLoginManager</span> <span class="p">{</span>
  <span class="k">private</span> <span class="nv">$em</span><span class="p">;</span>
  <span class="k">private</span> <span class="nv">$user</span><span class="p">;</span>
  <span class="k">private</span> <span class="nv">$password</span><span class="p">;</span>

  <span class="k">public</span> <span class="k">function</span> <span class="fm">__construct</span><span class="p">(</span><span class="nv">$user</span><span class="p">,</span> <span class="nv">$password</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">em</span> <span class="o">=</span> <span class="nx">DoctrineManager</span><span class="o">::</span><span class="na">getEntityManager</span><span class="p">();</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">user</span> <span class="o">=</span> <span class="nv">$user</span><span class="p">;</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">password</span> <span class="o">=</span> <span class="nv">$password</span><span class="p">;</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">isValid</span><span class="p">()</span> <span class="p">{</span>
    <span class="nv">$pass</span> <span class="o">=</span> <span class="nx">md5</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">password</span><span class="p">,</span> <span class="k">true</span><span class="p">);</span>
    <span class="nv">$user</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sanitizeInput</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">user</span><span class="p">);</span>

    <span class="nv">$queryBuilder</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">em</span><span class="o">-&gt;</span><span class="na">createQueryBuilder</span><span class="p">()</span>
      <span class="o">-&gt;</span><span class="na">select</span><span class="p">(</span><span class="s2">&#34;COUNT(p)&#34;</span><span class="p">)</span>
      <span class="o">-&gt;</span><span class="na">from</span><span class="p">(</span><span class="s2">&#34;User&#34;</span><span class="p">,</span> <span class="s2">&#34;u&#34;</span><span class="p">)</span>
      <span class="o">-&gt;</span><span class="na">where</span><span class="p">(</span><span class="s2">&#34;password = &#39;</span><span class="si">$pass</span><span class="s2">&#39; AND user = &#39;</span><span class="si">$user</span><span class="s2">&#39;&#34;</span><span class="p">);</span>
    <span class="nv">$query</span> <span class="o">=</span> <span class="nv">$queryBuilder</span><span class="o">-&gt;</span><span class="na">getQuery</span><span class="p">();</span>
    <span class="k">return</span> <span class="nx">boolval</span><span class="p">(</span><span class="nv">$query</span><span class="o">-&gt;</span><span class="na">getSingleScalarResult</span><span class="p">());</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">sanitizeInput</span><span class="p">(</span><span class="nv">$input</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">return</span> <span class="nx">addslashes</span><span class="p">(</span><span class="nv">$input</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="nv">$auth</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">RealSecureLoginManager</span><span class="p">(</span>
  <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;user&#39;</span><span class="p">],</span>
  <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;passwd&#39;</span><span class="p">]</span>
<span class="p">);</span>
<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$auth</span><span class="o">-&gt;</span><span class="na">isValid</span><span class="p">())</span> <span class="p">{</span>
  <span class="k">exit</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-17-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-17-result">
          <div class="apav-result-box">
            <p>
              This challenge is supposed to be a fixed version of day 13 but it introduces new
              vulnerabilities instead. The author tried to
              fix the DQL injection by applying <code class="inline">addslashes()</code> without
              <code class="inline">substr()</code> on the user name, and by hashing the password in line 13
              using <code class="inline">md5()</code>. Besides the fact that md5 should not be used to hash
              passwords and that password hashes should not be compared this way, the second
              parameter is set to true. This returns the hash in binary format. The binary hash can contain
              ASCII characters that are interpreted by Doctrine.
              In this case an attacker could use the value <code class="inline">128</code> as the password,
              resulting in <code class="inline">v�an���l���q��\</code> as hash.
              With the backslash at the end the single quote gets escaped leading to an injection.
              A possible payload could be <code class="inline">?user=%20OR%201=1-&passwd=128</code>.
              <br />

              To avoid DQL injections always use bound parameters for dynamic conditions. Never try to secure a
              DQL query with <code class="inline">addslashes()</code> or similar functions. Additionally, the
              password should be stored in a secure hashing format, for example BCrypt.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day17.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 18 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-18">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 18 - Sign</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="k">class</span> <span class="nc">JWT</span> <span class="p">{</span>
  <span class="k">public</span> <span class="k">function</span> <span class="nf">verifyToken</span><span class="p">(</span><span class="nv">$data</span><span class="p">,</span> <span class="nv">$signature</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$pub</span> <span class="o">=</span> <span class="nx">openssl_pkey_get_public</span><span class="p">(</span><span class="s2">&#34;file://pub_key.pem&#34;</span><span class="p">);</span>
    <span class="nv">$signature</span> <span class="o">=</span> <span class="nx">base64_decode</span><span class="p">(</span><span class="nv">$signature</span><span class="p">);</span>
    <span class="k">if</span> <span class="p">(</span><span class="nx">openssl_verify</span><span class="p">(</span><span class="nv">$data</span><span class="p">,</span> <span class="nv">$signature</span><span class="p">,</span> <span class="nv">$pub</span><span class="p">))</span> <span class="p">{</span>
      <span class="nv">$object</span> <span class="o">=</span> <span class="nx">json_decode</span><span class="p">(</span><span class="nx">base64_decode</span><span class="p">(</span><span class="nv">$data</span><span class="p">));</span>
      <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">loginAsUser</span><span class="p">(</span><span class="nv">$object</span><span class="p">);</span>
    <span class="p">}</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="p">(</span><span class="k">new</span> <span class="nx">JWT</span><span class="p">())</span><span class="o">-&gt;</span><span class="na">verifyToken</span><span class="p">(</span><span class="nv">$_GET</span><span class="p">[</span><span class="s1">&#39;d&#39;</span><span class="p">],</span> <span class="nv">$_GET</span><span class="p">[</span><span class="s1">&#39;s&#39;</span><span class="p">]);</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-18-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-18-result">
          <div class="apav-result-box">
            <p>
              This challenge contains a bug in the usage of the <code class="inline">openssl_verify()</code>
              function in line 5 that leads to an authentication bypass in line 7. The function has three return values:
              <code class="inline">1</code> if the signature is correct, <code class="inline">0</code>
              if the signature verification failed, and <code class="inline">-1</code> if there
              was an error while performing the verification. So if an attacker generates a valid
              signature for the data using another algorithm than the one
              <code class="inline">pub_key.pem</code> is using, the <code class="inline">openssl_verify()</code>
              function returns <code class="inline">-1</code> which is casted to
              <code class="inline">true</code> automatically. To avoid this problem use the type-safe
              comparison <code class="inline">===</code> to validate the return value
              of <code class="inline">openssl_verify()</code>, or consider using a different
              <a href="https://paragonie.com/blog/2015/11/choosing-right-cryptography-library-for-your-php-project-guide" target="_blank" rel="noopener">library for cryptography</a>.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day18.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 19 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-19">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 19 - Birch</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span><span class="lnt">17
</span><span class="lnt">18
</span><span class="lnt">19
</span><span class="lnt">20
</span><span class="lnt">21
</span><span class="lnt">22
</span><span class="lnt">23
</span><span class="lnt">24
</span><span class="lnt">25
</span><span class="lnt">26
</span><span class="lnt">27
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="k">class</span> <span class="nc">ImageViewer</span> <span class="p">{</span>
  <span class="k">private</span> <span class="nv">$file</span><span class="p">;</span>

  <span class="k">function</span> <span class="fm">__construct</span><span class="p">(</span><span class="nv">$file</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">file</span> <span class="o">=</span> <span class="s2">&#34;images/</span><span class="si">$file</span><span class="s2">&#34;</span><span class="p">;</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">createThumbnail</span><span class="p">();</span>
  <span class="p">}</span>

  <span class="k">function</span> <span class="nf">createThumbnail</span><span class="p">()</span> <span class="p">{</span>
    <span class="nv">$e</span> <span class="o">=</span> <span class="nx">stripcslashes</span><span class="p">(</span>
      <span class="nx">preg_replace</span><span class="p">(</span>
        <span class="s1">&#39;/[^0-9\\\]/&#39;</span><span class="p">,</span>
        <span class="s1">&#39;&#39;</span><span class="p">,</span>
        <span class="nx">isset</span><span class="p">(</span><span class="nv">$_GET</span><span class="p">[</span><span class="s1">&#39;size&#39;</span><span class="p">])</span> <span class="o">?</span> <span class="nv">$_GET</span><span class="p">[</span><span class="s1">&#39;size&#39;</span><span class="p">]</span> <span class="o">:</span> <span class="s1">&#39;25&#39;</span>
      <span class="p">)</span>
    <span class="p">);</span>
    <span class="nx">system</span><span class="p">(</span><span class="s2">&#34;/usr/bin/convert </span><span class="si">$this-&gt;file</span><span class="s2"> --resize </span><span class="si">$e</span><span class="s2">
</span><span class="s2">      ./thumbs/</span><span class="si">$this-&gt;file</span><span class="s2">&#34;</span><span class="p">);</span>
  <span class="p">}</span>

  <span class="k">function</span> <span class="fm">__toString</span><span class="p">()</span> <span class="p">{</span>
    <span class="k">return</span> <span class="s2">&#34;&lt;a href=</span><span class="si">$this-&gt;file</span><span class="s2">&gt;
</span><span class="s2">      &lt;img src=./thumbs/</span><span class="si">$this-&gt;file</span><span class="s2">&gt;&lt;/a&gt;&#34;</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">echo</span> <span class="p">(</span><span class="k">new</span> <span class="nx">ImageViewer</span><span class="p">(</span><span class="s2">&#34;image.png&#34;</span><span class="p">));</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-19-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-19-result">
          <div class="apav-result-box">
            <p>
              The <code class="inline">ImageViewer</code> class is prone to remote command execution through the
              <code class="inline">size</code>
              parameter in line 17. The <code class="inline">preg_replace()</code> call will purge almost any
              non-digit characters. This is not sufficient though because the function
              <code class="inline">stripcslashes()</code> will not only strip slashes but it will also replace
              C literal escape sequences with
              their actual byte representation. The backslash character is untouched by the
              <code class="inline">preg_replace()</code> call allowing
              an attacker to inject an octal byte escape sequence similar to
              <code class="inline">0\073\163\154\145\145\160\0405\073</code>.
              The <code class="inline">stripcslashes()</code> function will evaluate this input to
              <code class="inline">0;sleep 5;</code> which is concatenated into the
              system command and finally executed in the attackers favor.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day19.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 20 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-20">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 20 - Stocking</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span><span class="lnt">17
</span><span class="lnt">18
</span><span class="lnt">19
</span><span class="lnt">20
</span><span class="lnt">21
</span><span class="lnt">22
</span><span class="lnt">23
</span><span class="lnt">24
</span><span class="lnt">25
</span><span class="lnt">26
</span><span class="lnt">27
</span><span class="lnt">28
</span><span class="lnt">29
</span><span class="lnt">30
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="nx">set_error_handler</span><span class="p">(</span><span class="k">function</span> <span class="p">(</span><span class="nv">$no</span><span class="p">,</span> <span class="nv">$str</span><span class="p">,</span> <span class="nv">$file</span><span class="p">,</span> <span class="nv">$line</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">throw</span> <span class="k">new</span> <span class="nx">ErrorException</span><span class="p">(</span><span class="nv">$str</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nv">$no</span><span class="p">,</span> <span class="nv">$file</span><span class="p">,</span> <span class="nv">$line</span><span class="p">);</span>
<span class="p">},</span> <span class="k">E_ALL</span><span class="p">);</span>

<span class="k">class</span> <span class="nc">ImageLoader</span>
<span class="p">{</span>
  <span class="k">public</span> <span class="k">function</span> <span class="nf">getResult</span><span class="p">(</span><span class="nv">$uri</span><span class="p">)</span>
  <span class="p">{</span>
    <span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">filter_var</span><span class="p">(</span><span class="nv">$uri</span><span class="p">,</span> <span class="nx">FILTER_VALIDATE_URL</span><span class="p">))</span> <span class="p">{</span>
      <span class="k">return</span> <span class="s1">&#39;&lt;p&gt;Please enter valid uri&lt;/p&gt;&#39;</span><span class="p">;</span>
    <span class="p">}</span>

    <span class="k">try</span> <span class="p">{</span>
      <span class="nv">$image</span> <span class="o">=</span> <span class="nx">file_get_contents</span><span class="p">(</span><span class="nv">$uri</span><span class="p">);</span>
      <span class="nv">$path</span> <span class="o">=</span> <span class="s2">&#34;./images/&#34;</span> <span class="o">.</span> <span class="nx">uniqid</span><span class="p">()</span> <span class="o">.</span> <span class="s1">&#39;.jpg&#39;</span><span class="p">;</span>
      <span class="nx">file_put_contents</span><span class="p">(</span><span class="nv">$path</span><span class="p">,</span> <span class="nv">$image</span><span class="p">);</span>
      <span class="k">if</span> <span class="p">(</span><span class="nx">mime_content_type</span><span class="p">(</span><span class="nv">$path</span><span class="p">)</span> <span class="o">!==</span> <span class="s1">&#39;image/jpeg&#39;</span><span class="p">)</span> <span class="p">{</span>
      <span class="nx">unlink</span><span class="p">(</span><span class="nv">$path</span><span class="p">);</span>
      <span class="k">return</span> <span class="s1">&#39;&lt;p&gt;Only .jpg files allowed&lt;/p&gt;&#39;</span><span class="p">;</span>
    <span class="p">}</span>
    <span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">Exception</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span>
      <span class="k">return</span> <span class="s1">&#39;&lt;p&gt;There was an error: &#39;</span> <span class="o">.</span>
      <span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">()</span> <span class="o">.</span> <span class="s1">&#39;&lt;/p&gt;&#39;</span><span class="p">;</span>
    <span class="p">}</span>

    <span class="k">return</span> <span class="s1">&#39;&lt;img src=&#34;&#39;</span> <span class="o">.</span> <span class="nv">$path</span> <span class="o">.</span> <span class="s1">&#39;&#34; width=&#34;100&#34;/&gt;&#39;</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">echo</span> <span class="p">(</span><span class="k">new</span> <span class="nx">ImageLoader</span><span class="p">())</span><span class="o">-&gt;</span><span class="na">getResult</span><span class="p">(</span><span class="nv">$_GET</span><span class="p">[</span><span class="s1">&#39;img&#39;</span><span class="p">]);</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-20-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-20-result">
          <div class="apav-result-box">
            <p>
              This challenge contains a server-side request forgery vulnerability. It  allows an attacker to
              perform requests on behalf of the attacked web server. Thus, servers can be reached that would
              otherwise be not reachable for an external attacker. For example, this can be abused to perform
              a port scan and to grab banners (e.g., version of the server) on an internal network that the
              web server is part of. The exploitable parts
              are the usage of <code class="inline">file_get_contents()</code> with unfiltered user input in
              line 14 and the printing of the
              error message to the user in line 23. An attacker can request an internal URI like
              <code class="inline">?img=http://internal:22</code> and would get a response such as
              <code class="inline">failed to open stream: HTTP request failed! SSH-2.0-OpenSSH_7.2p2 Ubuntu-4ubuntu2.2</code>
              if OpenSSH is running. Information like this can be used to prepare further attacks. Another
              popular exploit scenario is the retrieval of sensitive AWS credentials when attacking an AWS cloud instance.
              Besides that, <code class="inline">filter_var()</code> also accepts <code class="inline">file://</code>
              URLs, enabling an attacker to load local files.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day20.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 21 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-21">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 21 - Gift Wrap</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span><span class="lnt">17
</span><span class="lnt">18
</span><span class="lnt">19
</span><span class="lnt">20
</span><span class="lnt">21
</span><span class="lnt">22
</span><span class="lnt">23
</span><span class="lnt">24
</span><span class="lnt">25
</span><span class="lnt">26
</span><span class="lnt">27
</span><span class="lnt">28
</span><span class="lnt">29
</span><span class="lnt">30
</span><span class="lnt">31
</span><span class="lnt">32
</span><span class="lnt">33
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="k">declare</span><span class="p">(</span><span class="nx">strict_types</span><span class="o">=</span><span class="mi">1</span><span class="p">);</span>

<span class="k">class</span> <span class="nc">ParamExtractor</span> <span class="p">{</span>
  <span class="k">private</span> <span class="nv">$validIndices</span> <span class="o">=</span> <span class="p">[];</span>

  <span class="k">private</span> <span class="k">function</span> <span class="nf">indices</span><span class="p">(</span><span class="nv">$input</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$validate</span> <span class="o">=</span> <span class="k">function</span> <span class="p">(</span><span class="nx">int</span> <span class="nv">$value</span><span class="p">,</span> <span class="nv">$key</span><span class="p">)</span> <span class="p">{</span>
      <span class="k">if</span> <span class="p">(</span><span class="nv">$value</span> <span class="o">&gt;</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span>
        <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">validIndices</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$key</span><span class="p">;</span>
      <span class="p">}</span>
    <span class="p">};</span>

    <span class="k">try</span> <span class="p">{</span>
      <span class="nx">array_walk</span><span class="p">(</span><span class="nv">$input</span><span class="p">,</span> <span class="nv">$validate</span><span class="p">,</span> <span class="mi">0</span><span class="p">);</span>
    <span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">TypeError</span> <span class="nv">$error</span><span class="p">)</span> <span class="p">{</span>
      <span class="k">echo</span> <span class="s2">&#34;Only numbers are allowed as input&#34;</span><span class="p">;</span>
    <span class="p">}</span>

    <span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">validIndices</span><span class="p">;</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">getCommand</span><span class="p">(</span><span class="nv">$parameters</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$indices</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">indices</span><span class="p">(</span><span class="nv">$parameters</span><span class="p">);</span>
    <span class="nv">$params</span> <span class="o">=</span> <span class="p">[];</span>
    <span class="k">foreach</span> <span class="p">(</span><span class="nv">$indices</span> <span class="k">as</span> <span class="nv">$index</span><span class="p">)</span> <span class="p">{</span>
      <span class="nv">$params</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$parameters</span><span class="p">[</span><span class="nv">$index</span><span class="p">];</span>
    <span class="p">}</span>
    <span class="k">return</span> <span class="nx">implode</span><span class="p">(</span><span class="nv">$params</span><span class="p">,</span> <span class="s1">&#39; &#39;</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="nv">$cmd</span> <span class="o">=</span> <span class="p">(</span><span class="k">new</span> <span class="nx">ParamExtractor</span><span class="p">())</span><span class="o">-&gt;</span><span class="na">getCommand</span><span class="p">(</span><span class="nv">$_GET</span><span class="p">[</span><span class="s1">&#39;p&#39;</span><span class="p">]);</span>
<span class="nx">system</span><span class="p">(</span><span class="s1">&#39;resizeImg image.png &#39;</span> <span class="o">.</span> <span class="nv">$cmd</span><span class="p">);</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-21-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-21-result">
          <div class="apav-result-box">
            <p>
              This challenge contains a command injection vulnerability in line 33. The developer declared
              <code class="inline">strict_types=1</code>
              in line 1 to ensure the the type hint in the validate function in line 7 throws a
              <code class="inline">TypeError</code> exception if a non-int
              is passed to the class. Even with strict types enabled there is an bug with the usage of
              <code class="inline">array_walk()</code> which ignores
              the strict typing and uses the default weak typing of PHP instead. An attacker can
              therefore just append a command to the last parameter that is
              executed in the system call. A possible payload could look like
              <code class="inline">?p[1]=1&p[2]=2;%20ls%20-la</code>.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day21.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 22 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-22">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 22 - Chimney</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="k">if</span> <span class="p">(</span><span class="nx">isset</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;password&#39;</span><span class="p">]))</span> <span class="p">{</span>
  <span class="nx">setcookie</span><span class="p">(</span><span class="s1">&#39;hash&#39;</span><span class="p">,</span> <span class="nx">md5</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;password&#39;</span><span class="p">]));</span>
  <span class="nx">header</span><span class="p">(</span><span class="s2">&#34;Refresh: 0&#34;</span><span class="p">);</span>
  <span class="k">exit</span><span class="p">;</span>
<span class="p">}</span>

<span class="nv">$password</span> <span class="o">=</span> <span class="s1">&#39;0e836584205638841937695747769655&#39;</span><span class="p">;</span>
<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">isset</span><span class="p">(</span><span class="nv">$_COOKIE</span><span class="p">[</span><span class="s1">&#39;hash&#39;</span><span class="p">]))</span> <span class="p">{</span>
  <span class="k">echo</span> <span class="s1">&#39;&lt;form&gt;&lt;input type=&#34;password&#34; name=&#34;password&#34; /&gt;&#39;</span>
  <span class="o">.</span> <span class="s1">&#39;&lt;input type=&#34;submit&#34; value=&#34;Login&#34; &gt;&lt;/form &gt;&#39;</span><span class="p">;</span>
  <span class="k">exit</span><span class="p">;</span>
<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nx">md5</span><span class="p">(</span><span class="nv">$_COOKIE</span><span class="p">[</span><span class="s1">&#39;hash&#39;</span><span class="p">])</span> <span class="o">==</span> <span class="nv">$password</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">echo</span> <span class="s1">&#39;Login succeeded&#39;</span><span class="p">;</span>
<span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
  <span class="k">echo</span> <span class="s1">&#39;Login failed&#39;</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-22-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-22-result">
          <div class="apav-result-box">
            <p>
              The code snippet suffers from 4 vulnerabilities. First, the type-unsafe comparison operator is used in line 12
              to compare the hashed password to a string. The string has the form of the scientific notation and
              as a result it is interpreted as “zero to the power of X”, which is zero. So if we are able to generate
              a zero-string for the hashed user input as well, the check compares zero to zero and succeeds. This hashes
              are called “Magic Hashes” and a Google search reveals that the MD5 hash of the value
              <code class="inline">240610708</code>
              results in the desired properties. The code snippet calculates the MD5 hash of the password twice though, so it
              is not possible to directly submit the value. Instead you have to exploit the second vulnerability: the first hash
              is calculated on the server side but stored in a cookie on the client side. Thus the value
              <code class="inline">240610708</code>
              simply has to be directly injected into the password cookie.<br /><br />

              There are two more vulnerabilities but they are not relevant for this challenge. First,
              the comparison of the hashes
              is vulnerable to timing attacks. To prevent this issue, the PHP function
              <code class="inline">hash_equals()</code> should be used for comparison.
              Second, the PHP function <code class="inline">md5()</code> is used to hash the password.
              The MD5 algorithm is considered broken and it was not designed
              for password hashing. Instead a secure password hashing algorithm like BCrypt should be used.
              It should be noted that passwords also should not be hard coded but separated into a configuration file.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day22.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 23 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-23">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 23 - Cookies</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt"> 1
</span><span class="lnt"> 2
</span><span class="lnt"> 3
</span><span class="lnt"> 4
</span><span class="lnt"> 5
</span><span class="lnt"> 6
</span><span class="lnt"> 7
</span><span class="lnt"> 8
</span><span class="lnt"> 9
</span><span class="lnt">10
</span><span class="lnt">11
</span><span class="lnt">12
</span><span class="lnt">13
</span><span class="lnt">14
</span><span class="lnt">15
</span><span class="lnt">16
</span><span class="lnt">17
</span><span class="lnt">18
</span><span class="lnt">19
</span><span class="lnt">20
</span><span class="lnt">21
</span><span class="lnt">22
</span><span class="lnt">23
</span><span class="lnt">24
</span><span class="lnt">25
</span><span class="lnt">26
</span><span class="lnt">27
</span><span class="lnt">28
</span><span class="lnt">29
</span><span class="lnt">30
</span><span class="lnt">31
</span><span class="lnt">32
</span><span class="lnt">33
</span><span class="lnt">34
</span><span class="lnt">35
</span><span class="lnt">36
</span><span class="lnt">37
</span><span class="lnt">38
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="k">class</span> <span class="nc">LDAPAuthenticator</span> <span class="p">{</span>
  <span class="k">public</span> <span class="nv">$conn</span><span class="p">;</span>
  <span class="k">public</span> <span class="nv">$host</span><span class="p">;</span>

  <span class="k">function</span> <span class="fm">__construct</span><span class="p">(</span><span class="nv">$host</span> <span class="o">=</span> <span class="s2">&#34;localhost&#34;</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">host</span> <span class="o">=</span> <span class="nv">$host</span><span class="p">;</span>
  <span class="p">}</span>

  <span class="k">function</span> <span class="nf">authenticate</span><span class="p">(</span><span class="nv">$user</span><span class="p">,</span> <span class="nv">$pass</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$result</span> <span class="o">=</span> <span class="p">[];</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">conn</span> <span class="o">=</span> <span class="nx">ldap_connect</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">host</span><span class="p">);</span>
    <span class="nx">ldap_set_option</span><span class="p">(</span>
      <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">conn</span><span class="p">,</span>
      <span class="nx">LDAP_OPT_PROTOCOL_VERSION</span><span class="p">,</span>
      <span class="mi">3</span>
    <span class="p">);</span>
    <span class="k">if</span> <span class="p">(</span><span class="o">!@</span><span class="nx">ldap_bind</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">conn</span><span class="p">))</span>
      <span class="k">return</span> <span class="o">-</span><span class="mi">1</span><span class="p">;</span>
    <span class="nv">$user</span> <span class="o">=</span> <span class="nx">ldap_escape</span><span class="p">(</span><span class="nv">$user</span><span class="p">,</span> <span class="k">null</span><span class="p">,</span> <span class="nx">LDAP_ESCAPE_DN</span><span class="p">);</span>
    <span class="nv">$pass</span> <span class="o">=</span> <span class="nx">ldap_escape</span><span class="p">(</span><span class="nv">$pass</span><span class="p">,</span> <span class="k">null</span><span class="p">,</span> <span class="nx">LDAP_ESCAPE_DN</span><span class="p">);</span>
    <span class="nv">$result</span> <span class="o">=</span> <span class="nx">ldap_search</span><span class="p">(</span>
      <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">conn</span><span class="p">,</span>
      <span class="s2">&#34;&#34;</span><span class="p">,</span>
      <span class="s2">&#34;(&amp;(uid=</span><span class="si">$user</span><span class="s2">)(userPassword=</span><span class="si">$pass</span><span class="s2">))&#34;</span>
    <span class="p">);</span>
    <span class="nv">$result</span> <span class="o">=</span> <span class="nx">ldap_get_entries</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">conn</span><span class="p">,</span> <span class="nv">$result</span><span class="p">);</span>
    <span class="k">return</span> <span class="p">(</span><span class="nv">$result</span><span class="p">[</span><span class="s2">&#34;count&#34;</span><span class="p">]</span> <span class="o">&gt;</span> <span class="mi">0</span> <span class="o">?</span> <span class="mi">1</span> <span class="o">:</span> <span class="mi">0</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">if</span><span class="p">(</span><span class="nx">isset</span><span class="p">(</span><span class="nv">$_GET</span><span class="p">[</span><span class="s2">&#34;u&#34;</span><span class="p">])</span> <span class="o">&amp;&amp;</span> <span class="nx">isset</span><span class="p">(</span><span class="nv">$_GET</span><span class="p">[</span><span class="s2">&#34;p&#34;</span><span class="p">]))</span> <span class="p">{</span>
  <span class="nv">$ldap</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">LDAPAuthenticator</span><span class="p">();</span>
  <span class="k">if</span> <span class="p">(</span><span class="nv">$ldap</span><span class="o">-&gt;</span><span class="na">authenticate</span><span class="p">(</span><span class="nv">$_GET</span><span class="p">[</span><span class="s2">&#34;u&#34;</span><span class="p">],</span> <span class="nv">$_GET</span><span class="p">[</span><span class="s2">&#34;p&#34;</span><span class="p">]))</span> <span class="p">{</span>
    <span class="k">echo</span> <span class="s2">&#34;You are now logged in!&#34;</span><span class="p">;</span>
  <span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
    <span class="k">echo</span> <span class="s2">&#34;Username or password unknown!&#34;</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-23-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-23-result">
          <div class="apav-result-box">
            <p>
              The <code class="inline">LDAPAuthenticator</code> class is prone to an LDAP injection in line 24.
              By injecting special characters
              into the username it is possible to alternate the result set of the LDAP query. Although the
              <code class="inline">ldap_escape()</code>
              function is used to sanitize the input in lines 19 and 20, a wrong flag has been passed to the sanitize-calls resulting
              in insufficient/incorrect sanitization. Therefore, in this particular example, the LDAP injection results
              in an unauthenticated adversary bypassing the authentication mechanism by injecting the asterisk-wildcard
              <code class="inline">*</code> character as username and password to successfully login as an arbitrary user.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day23.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DAY 24 -->
<div class="modal fade modal-apav" tabindex="-1" role="dialog" id="modal-day-24">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Day 24 - Nutcracker</h3>
        <button type="button" class="close" data-dismiss="modal"><span><img src="/img/apav/close.png" alt="Close" /></span></button>
      </div>
      <div class="modal-body">
        <p>
          Can you spot the vulnerability?
        </p>
<div class="highlight"><div class="chroma">
<table class="lntable"><tr><td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="lnt">1
</span><span class="lnt">2
</span><span class="lnt">3
</span><span class="lnt">4
</span><span class="lnt">5
</span><span class="lnt">6
</span></code></pre></td>
<td class="lntd">
<pre class="chroma"><code class="language-phpinline" data-lang="phpinline"><span class="o">@</span><span class="nv">$GLOBALS</span><span class="o">=</span><span class="nv">$GLOBALS</span><span class="p">{</span><span class="nx">next</span><span class="p">}</span><span class="o">=</span><span class="nx">next</span><span class="p">(</span><span class="nv">$GLOBALS</span><span class="p">{</span><span class="s1">&#39;GLOBALS&#39;</span><span class="p">})</span>
  <span class="p">[</span><span class="nv">$GLOBALS</span><span class="p">[</span><span class="s1">&#39;next&#39;</span><span class="p">][</span><span class="s1">&#39;next&#39;</span><span class="p">]</span><span class="o">=</span><span class="nx">next</span><span class="p">(</span><span class="nv">$GLOBALS</span><span class="p">)[</span><span class="s1">&#39;GLOBALS&#39;</span><span class="p">]]</span>
  <span class="p">[</span><span class="nv">$next</span><span class="p">[</span><span class="s1">&#39;GLOBALS&#39;</span><span class="p">]</span><span class="o">=</span><span class="nx">next</span><span class="p">(</span><span class="nv">$GLOBALS</span><span class="p">[</span><span class="nx">GLOBALS</span><span class="p">][</span><span class="s1">&#39;GLOBALS&#39;</span><span class="p">])</span>
  <span class="p">[</span><span class="nv">$next</span><span class="p">[</span><span class="s1">&#39;next&#39;</span><span class="p">]]][</span><span class="nv">$next</span><span class="p">[</span><span class="s1">&#39;GLOBALS&#39;</span><span class="p">]</span><span class="o">=</span><span class="nx">next</span><span class="p">(</span><span class="nv">$next</span><span class="p">[</span><span class="s1">&#39;GLOBALS&#39;</span><span class="p">])]</span>
  <span class="p">[</span><span class="nv">$GLOBALS</span><span class="p">[</span><span class="nx">next</span><span class="p">][</span><span class="s1">&#39;next&#39;</span><span class="p">](</span><span class="nv">$GLOBALS</span><span class="p">[</span><span class="s1">&#39;next&#39;</span><span class="p">]{</span><span class="s1">&#39;GLOBALS&#39;</span><span class="p">})]</span><span class="o">=</span>
<span class="nx">next</span><span class="p">(</span><span class="nx">neXt</span><span class="p">(</span><span class="err">$</span><span class="p">{</span><span class="s1">&#39;next&#39;</span><span class="p">}[</span><span class="s1">&#39;next&#39;</span><span class="p">]));</span>
</code></pre></td></tr></table>
</div>
</div>
        <br/>
        <button class="btn btn-primary" data-toggle="collapse" data-target="#day-24-result" >
          <i class="far fa-lightbulb"></i>
          &nbsp;
          Show Solution
        </button>
        <div class="collapse" id="day-24-result">
          <div class="apav-result-box">
            <p>
              This challenge consists of a code snippet that was created by one of our team members for the Hack.lu
              CTF Tournament. It makes heavy use of the <code class="inline">next()</code> function and the
              <code class="inline">$GLOBALS</code> array.
              The <code class="inline">next()</code> function moves the internal array pointer
              up by one. Combined with the <code class="inline">$GLOBALS</code> array this allows us
              to execute arbitrary code.<br />
              The payload has to be split up into 2 segments: First, a PHP function to execute, passed in via
              <code class="inline">$_COOKIE[‘GLOBALS’]</code>.
              Second, parameters for the injected function, passed in via the file type of a sent file with the
              same name as the called PHP function.
              A more detailed write-up of the solution can be found
              <a href="https://github.com/ctfs/write-ups-2014/tree/master/hack-lu-ctf-2014/next-global-backdoor" target="_blank" rel="noopener">here</a>.
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div>
          <a target="_blank" href='day24.php' class="btn btn-outline btn-outline-green">
            <span>
              RUN THE CODE ONLINE
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
 </div><div class="footer text-light bg-dark">
  <div class="container">
    <div class="row footer-top">
      <div class="col-sm">
        <ul class="nav flex-column">
          <li class="nav-item"><a href="/product/tour/" class="nav-link">Product</a></li>
          <li class="nav-item"><a href="/product/tour/" class="nav-link">Tour</a></li>
          <li class="nav-item"><a href="/product/compliance/" class="nav-link">Compliance</a></li>
          <li class="nav-item"><a href="/product/reports/" class="nav-link">Reports</a></li>
          <li class="nav-item"><a href="/product/approach/" class="nav-link">Approach</a></li>
          <li class="nav-item"><a href="/product/patch-generation/" class="nav-link">PatchGen</a></li>
          <li class="nav-item"><a href="/product/datasheets/" class="nav-link">Data Sheets</a></li>
        </ul>
      </div>
      <div class="col-sm">
        <ul class="nav flex-column">
          <li class="nav-item"><a href="/integrations/cicd/" class="nav-link">Integrations</a></li>
          <li class="nav-item"><a href="/integrations/cicd/" class="nav-link">CI/CD</a></li>
          <li class="nav-item"><a href="/integrations/ide/" class="nav-link">IDE</a></li>
          <li class="nav-item"><a href="/integrations/tracker/" class="nav-link">Tracker</a></li>
          <li class="nav-item"><a href="/integrations/build/" class="nav-link">Build</a></li>
          <li class="nav-item"><a href="/integrations/other/" class="nav-link">Other</a></li>
        </ul>
      </div>
      <div class="col-sm">
        <ul class="nav flex-column">
          <li class="nav-item"><a href="/customers/testimonials/" class="nav-link">Customers</a></li>
          <li class="nav-item"><a href="/customers/testimonials/" class="nav-link">Testimonials</a></li>
          <li class="nav-item"><a href="/customers/use-cases/" class="nav-link">Use Cases</a></li>
        </ul>
      </div>
      <div class="col-sm">
        <ul class="nav flex-column">
          <li class="nav-item"><a href="/research/blog/" class="nav-link">Research</a></li>
          <li class="nav-item"><a href="/research/blog/" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="/research/talks/" class="nav-link">Talks</a></li>
          <li class="nav-item"><a href="/research/resources/" class="nav-link">Resources</a></li>
          <li class="nav-item"><a href="/research/projects/" class="nav-link">Projects</a></li>
        </ul>
      </div>
      <div class="col-sm">
        <ul class="nav flex-column">
          <li class="nav-item"><a href="/company/about/" class="nav-link">Company</a></li>
          <li class="nav-item"><a href="/company/about/" class="nav-link">About</a></li>
          <li class="nav-item"><a href="/company/careers/" class="nav-link">Careers</a></li>
          <li class="nav-item"><a href="/company/events/" class="nav-link">Events</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-newsletter">
      <form
        name="mc-embedded-subscribe-form"
        target="_blank"
        method="POST"
        action="//ripstech.us14.list-manage.com/subscribe/post?u=d864b7e0607187e3917a94bc5&amp;id=d19d9ad04b"
        rel="noopener"
        novalidate
      >
        <div>Subscribe to our newsletter</div>
        <input
          type="email"
          class="form-control"
          name="EMAIL"
          id="email"
          placeholder="email address"
        />
        <button type="submit" class="btn btn-sm btn-outline btn-outline-rips">
          <span>Subscribe</span>
        </button>
      </form>
    </div>

    <div class="row footer-bottom">
      <div class="col-md">
        <a href="/" title="Homepage" class="logo-link">
          <img src="/img/logo_light_color.svg" height="60" alt="RIPS Logo">
        </a>
        <div class="copyright"><small>Copyright 2019 by RIPS Technologies GmbH</small></div>
      </div>

      <div class="col-md">
        <div class="buttons">
          <a class="btn btn-sm btn-outline btn-outline-light" href="/contact/">
            <span>Contact Us</span>
          </a>
          <a class="btn btn-sm btn-outline btn-outline-green" href="https://www.ripstech.com/free-trial/">
            <span>Request Trial</span>
          </a>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a href="/security-statement/" class="nav-link">Security Statement</a>
          </li>
          <li class="nav-item">
            <a href="/privacy/" class="nav-link">Privacy Policy</a>
          </li>
          <li class="nav-item">
            <a href="/imprint/" class="nav-link">Imprint</a>
          </li>
        </ul>

        <div class="social socialicons">
          <a href="https://twitter.com/ripstech" target="_blank" class="outbound" rel="noopener">
            <i class="fab fa-twitter-square"></i>
          </a>
          <a href="https://www.linkedin.com/company/rips-technologies" target="_blank" class="outbound" rel="noopener">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="https://github.com/rips" target="_blank" class="outbound" rel="noopener">
            <i class="fab fa-github-square"></i>
          </a>
          <a href="https://www.facebook.com/ripstech" target="_blank" class="outbound" rel="noopener">
            <i class="fab fa-facebook-square"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="cookie-notice">
  We use cookies to ensure that we give you the best experience on our website. If you continue to use
  this site we will assume that you are happy with it.
  <a class="btn btn-sm btn-outline btn-outline-light">
    <span>I Agree</span>
  </a>
  <a class="btn btn-sm btn-outline btn-outline-light" href="/privacy/">
    <span>More Information</span>
  </a>
</div>

<script
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"
></script>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
  crossorigin="anonymous"
></script>
<script
  src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
  crossorigin="anonymous"
></script>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"
  integrity="sha256-DiHJ7hbvMejsMyP76bpVWacb5HSHQ2sQlrJV8n7KEvA="
  crossorigin="anonymous"
></script>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js"
  integrity="sha256-9Nt2r+tJnSd2A2CRUvnjgsD+ES1ExvjbjBNqidm9doI="
  crossorigin="anonymous"
></script>




<script src="/js/main.min.js"></script>




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/shariff/1.26.2/shariff.min.css" />
  
  
  
  <script src="/js/apav.min.js"></script>
</body>
</html>
