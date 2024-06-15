<?php
$WebsiteName = "Arms";
$WebsiteLogo = "https://www.thearms.fr/container/images/logo.jpg";

$blue_button = "shadow bg-blue-600 hover:bg-blue-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded";
$green_button = "shadow bg-green-600 hover:bg-green-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded";
$red_button = "shadow bg-red-600 hover:bg-red-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded";
$teal_button = "shadow bg-teal-600 hover:bg-teal-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded";
$indigo_button = "shadow bg-indigo-600 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded";

$title = "Documentation RageUI V2";


?>
<!doctype html>
<html lang="en" style="height: 100%">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?> | <?= $WebsiteName ?></title>
    <link rel="shortcut icon" href="<?= $WebsiteLogo ?>" type="image/x-icon">

    <!-- Awesome -->
    <script src="https://kit.fontawesome.com/83f4286022.js" crossorigin="anonymous"></script>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
    .btn {
        background-color: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 255, 255, 0.2);
        border-style: solid;
        border-width: 1px;
            padding: 0.75rem 1rem;
            border-radius: 0.3rem;
        transition: color 0.2s, background-color 0.2s, border-color 0.2s
    }
    @media screen and (min-width: 64em) {
        .main-content {
            max-width: 64rem;
            padding: 2rem 6rem;
            margin: 0 auto;
            font-size: 1.1rem
        }
    }
    .main-content kbd {
        border: 1px solid #c6cbd1;
        border-bottom-color: #959da5;
        border-radius: 3px;
        box-shadow: inset 0 -1px 0 #959da5;
        color: #444d56;
        display: grid;
        
        font-size: 11px;
        line-height: 10px;
        padding: 3px 5px;
        vertical-align: middle;
        margin: 0 auto;
        padding: 2rem 6rem;
        font-size: 1.1rem;
        max-width: 64rem;

    }
    .main-content code {
        padding: 2px 4px;
        font-family: Consolas, "Liberation Mono", Menlo, Courier, monospace;
        font-size: 0.9rem;
        color: #567482;
        background-color: #10141c;
        border-radius: 0.3rem
    }
    .main-content pre {
        padding: 0.8rem;
        margin-top: 0;
        margin-bottom: 1rem;
        font: 1rem Consolas, "Liberation Mono", Menlo, Courier, monospace;
        color: #567482;
        word-wrap: normal;
        background-color: #10141c;
        border: solid 1px #10141c;
        border-radius: 0.3rem
    }
    .main-content pre>code {
        padding: 0;
        margin: 0;
        font-size: 0.9rem;
        color: #567482;
        word-break: normal;
        white-space: pre;
        background: transparent;
        border: 0
    }
</style>

<body class="bg-zinc-800 text-white">
    <header class="text-white font-bold px-[5rem] py-[6rem] text-center" style="background-color: #159957; background-image: linear-gradient(120deg, #155799, #159957)" role="banner">
        <h1 class="text-[3.25rem]">Documentation RageUI</h1>
        <h2 class="project-tagline mt-2"></h2>

        <a href="https://github.com/ArmsYT/RageUI-V2-Doc" class="btn ease-in-out duration-300 hover:scale-105">View on GitHub</a>


    </header>

    <main id="content" class="main-content" role="main">
            <pre><code><span class="text-lime-400">fx_version</span> <span class="text-[#e3fa8c]">'adamant'</span>
<span class="text-lime-400">game</span> <span class="text-[#e3fa8c]">'gta5'</span>
<span class="text-lime-400">lua54</span> <span class="text-[#e3fa8c]">'false'</span>
<span class="text-lime-400">this_is_a_map</span> <span class="text-[#e3fa8c]">'false'</span>

<span class="text-lime-400">name</span> <span class="text-[#e3fa8c]">'Toto'</span>
<span class="text-lime-400">author</span> <span class="text-[#e3fa8c]">'Arms'</span>
<span class="text-lime-400">description</span> <span class="text-[#e3fa8c]">'Description'</span>
<span class="text-lime-400">version</span> <span class="text-[#e3fa8c]">'1.0'</span>

<span class="text-lime-400">client_scripts</span> <span class="text-[#d8d700]">{</span>
    <span class="text-[#e3fa8c]">"client/*.lua"</span><span class="text-white">,</span>
<span class="text-[#d8d700]">}</span>

<span class="text-lime-400">server_scripts</span> <span class="text-[#d8d700]">{</span>
    <span class="text-[#e3fa8c]">"server/*.lua"</span><span class="text-white">,</span>
<span class="text-[#d8d700]">}</span>

<span class="text-lime-400">shared_scripts</span> <span class="text-[#d8d700]">{</span>
    <span class="text-[#e3fa8c]">"shared/*.lua"</span><span class="text-white">,</span>
<span class="text-[#d8d700]">}</span>


<span class="text-lime-400">esgrow_scripts</span> <span class="text-[#d8d700]">{</span>
    <span class="text-[#e3fa8c]">"shared/*.lua"</span><span class="text-white">,</span>
    <span class="text-[#e3fa8c]">"client/*.lua"</span><span class="text-white">,</span>
    <span class="text-[#e3fa8c]">"server/*.lua"</span><span class="text-white">,</span>
<span class="text-[#d8d700]">}</span></code></pre>


<pre><code><span class="text-white">Menu</span> <span class="text-[#c169c6]">=</span> <span class="text-white">RageUI.</span><span class="text-lime-400">CreateMenu</span><span class="text-[#efc810]">(</span><span class="text-[#f1fa8c]">'Titre'</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">'Sous Titre'</span><span class="text-[#efc810]">)</span></code></pre>

<pre><code><span class="text-white">SubMenu</span> <span class="text-[#c169c6]">=</span> <span class="text-white">RageUI.</span><span class="text-lime-400">CreateSubMenu</span><span class="text-[#efc810]">(</span><span class="text-white">Menu,</span><span class="text-[#f1fa8c]">'Titre'</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">'Sous Titre'</span><span class="text-[#efc810]">)</span></code></pre>

<pre><code><span class="text-white">RageUI.</span><span class="text-lime-400">IsVisible</span><span class="text-[#efc810]">(</span><span class="text-white">Menu, </span><span class="text-[#c169c6]">function</span><span class="text-[#129ff1]">()</span>
<span class="text-[#c169c6]">end</span><span class="text-[#efc810]">)</span></code></pre>

<pre><code><span class="text-white">RageUI.</span><span class="text-lime-400">Button</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">"Text"</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">"Description"</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span><span class="text-white">RightLabel</span> <span class="text-[#c169c6]">=</span> <span class="text-[#f1fa8c]">"→→→"</span><span class="text-[#efc810]">}</span><span class="text-white">,</span> <span class="text-[#f0a941]">true</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span>
    <span class="text-white">onSelected</span> <span class="text-[#c169c6]">= function</span><span class="text-[#129ff1]">()</span>
    <span class="text-[#c169c6]">end</span>
<span class="text-[#efc810]">}</span><span class="text-[#129ff1]">)</span></code></pre>

<pre><code><span class="text-white">RageUI.</span><span class="text-lime-400">Separator</span><span class="text-[#efc810]">(</span><span class="text-[#f1fa8c]">'Text'</span><span class="text-[#efc810]">)</span></code></pre>

<pre><code><span class="text-[#c169c6]">local</span> <span class="text-white">checkbox</span> <span class="text-[#c169c6]">=</span> <span class="text-[#f0a941]">false</span>

<span class="text-white">RageUI</span><span class="text-white">.</span><span class="text-white">Checkbox</span><span class="text-white">(</span><span class="text-[#f1fa8c]">"Checkbox"</span><span class="text-white">,</span> <span class="text-[#f0a941]">nil</span><span class="text-white">,</span> <span class="text-white">checkbox</span><span class="text-white">,</span> <span class="text-[#efc810]">{}</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span>
    <span class="text-white">onChecked</span> <span class="text-[#c169c6]">= function()</span>
        <span class="text-white">checkbox</span> <span class="text-[#c169c6]">=</span> <span class="text-[#f0a941]">true</span>
    <span class="text-[#c169c6]">end</span><span class="text-white">,</span>
    <span class="text-white">onUnChecked</span> <span class="text-[#c169c6]">= function()</span>
        <span class="text-white">checkbox</span> <span class="text-[#c169c6]">=</span> <span class="text-[#f0a941]">false</span>
    <span class="text-[#c169c6]">end</span><span class="text-white">,</span>
    <span class="text-white">onSelected</span> <span class="text-[#c169c6]">= function</span><span class="text-[#129ff1]">(</span><span class="text-[#f0a941]">Index</span><span class="text-[#129ff1]">)</span>
        <span class="text-white">checkbox</span> <span class="text-[#c169c6]">=</span> <span class="text-white">index</span>
    <span class="text-[#c169c6]">end</span>
<span class="text-[#efc810]">}</span><span class="text-[#129ff1]">)</span></code></pre>
</code></pre>

<pre><code><span class="text-[#c169c6]">local</span> <span class="text-white">list</span> <span class="text-[#c169c6]">=</span> <span class="text-[#efc810]">1</span>

<span class="text-white">RageUI</span><span class="text-white">.</span><span class="text-lime-400">List</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">"Gilet pare-balles"</span><span class="text-white">, </span><span class="text-[#efc810]">{</span><span class="text-[#f1fa8c]">"Petit"</span><span class="text-white">, </span><span class="text-[#f1fa8c]">"Moyen"</span><span class="text-white">, </span><span class="text-[#f1fa8c]">"Grand"</span><span class="text-[#efc810]">}</span><span class="text-white">, IndexList,</span> <span class="text-[#f0a941]">nil</span><span class="text-white">,</span><span class="text-[#efc810]">{}</span><span class="text-white">,</span> <span class="text-[#f0a941]">true</span><span class="text-white">, </span><span class="text-[#efc810]">{</span>
    <span class="text-white">onListChange</span> <span class="text-[#c169c6]">= function(</span><span class="text-[#f0a941]">Index</span><span class="text-[#c169c6]">)</span>
        <span class="text-white">list</span> <span class="text-[#c169c6]">=</span> <span class="text-white">Index</span>
    <span class="text-[#c169c6]">end</span><span class="text-white">,</span>
    <span class="text-white">onSelected</span> <span class="text-[#c169c6]">=</span> <span class="text-[#c169c6]">function(</span><span class="text-[#f0a941]">index</span><span class="text-[#c169c6]">)</span>
        <span class="text-white">print</span><span class="text-[#c169c6]">(</span><span class="text-white">index</span><span class="text-[#c169c6]">)</span>
    <span class="text-[#c169c6]">end</span>
<span class="text-[#efc810]">}</span><span class="text-[#129ff1]">)</span></code></pre>

<pre><code><span class="text-[#c169c6]">local</span> <span class="text-white">progressmin</span> <span class="text-[#c169c6]">=</span> <span class="text-[#efc810]">0</span>
<span class="text-[#c169c6]">local</span> <span class="text-white">progressmax</span> <span class="text-[#c169c6]">=</span> <span class="text-[#efc810]">100</span>


<span class="text-white">RageUI.</span><span class="text-lime-400">Slider</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">'Slider'</span><span class="text-white">,</span> <span class="text-white">progressmin</span><span class="text-white">,</span> <span class="text-white">progressmax</span><span class="text-white">,</span> <span class="text-[#f0a941]">nil</span><span class="text-white">,</span> <span class="text-[#efc810]">50</span><span class="text-white">,</span> <span class="text-[#efc810]">{}</span><span class="text-white">,</span> <span class="text-[#f0a941]">true</span><span class="text-white">,</span> <span class="text-[#efc810]">{}</span><span class="text-[#129ff1]">)</span>
</code></pre>

<pre><code><span class="text-[#c169c6]">local</span> <span class="text-white">sliderheritage</span> <span class="text-[#c169c6]">=</span> <span class="text-[#efc810]">1</span>

<span class="text-white">RageUI.</span><span class="text-lime-400">UISliderHeritage</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">'SliderHeritage'</span><span class="text-white">,</span> <span class="text-white">sliderheritage</span><span class="text-white">,</span> <span class="text-[#f0a941]">nil</span><span class="text-white">,</span> <span class="text-[#efc810]">{}</span><span class="text-white">,</span> <span class="text-[#efc810]">1</span><span class="text-[#129ff1]">)</span></code></pre>

<pre><code><span class="text-white">RageUI.</span><span class="text-lime-400">BoutonPanel</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">'Gauche'</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">'Droite'</span><span class="text-white">,</span> <span class="text-[#efc810]">1</span><span class="text-[#129ff1]">)</span></code></pre>

<pre><code><span class="text-[#c169c6]">local</span> <span class="text-white">PanelIndex</span> <span class="text-[#c169c6]">=</span> <span class="text-[#efc810]">1</span>
<span class="text-[#c169c6]">local</span> <span class="text-white">minimalIndexColor</span> <span class="text-[#c169c6]">=</span> <span class="text-[#efc810]">1</span>
<span class="text-[#c169c6]">local</span> <span class="text-white">currentIndexColor</span> <span class="text-[#c169c6]">=</span> <span class="text-[#efc810]">1</span>

<span class="text-white">RageUI.</span><span class="text-lime-400">ColourPanel</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">"Couleur"</span><span class="text-white">,</span> <span class="text-white">RageUI</span><span class="text-white">.</span><span class="text-white">PanelColour</span><span class="text-white">.</span><span class="text-white">HairCut</span><span class="text-white">,</span> <span class="text-white">minimalIndexColor1</span><span class="text-white">,</span> <span class="text-white">currentIndexColor1</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span>
    <span class="text-white">onColorChange</span> <span class="text-[#c169c6]">= function(</span><span class="text-[#f0a941]">MinimumIndex</span><span class="text-white">,</span> <span class="text-[#f0a941]">CurrentIndex</span><span class="text-[#c169c6]">)</span>
        <span class="text-white">minimalIndexColor</span> <span class="text-[#c169c6]">=</span> <span class="text-white">MinimumIndex</span>
        <span class="text-white">currentIndexColor</span> <span class="text-[#c169c6]">=</span> <span class="text-white">CurrentIndex</span>
    <span class="text-[#c169c6]">end</span><span class="text-white">,</span>
<span class="text-[#efc810]">}</span><span class="text-white">, PanelIndex</span><span class="text-white">,</span> <span class="text-[#efc810]">{}</span><span class="text-[#129ff1]">)</span></code></pre>
            </div>
        </div>

<pre><code><span class="text-white">RageUI.</span><span class="text-lime-400">StatisticPanel</span><span class="text-[#129ff1]">(</span><span class="text-[#efc810]">0</span><span class="text-white">.</span><span class="text-[#efc810]">5</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">'StatisticPanel'</span><span class="text-white">,</span> <span class="text-[#efc810]">1</span><span class="text-[#129ff1]">)</span></code></pre>

<pre><code><span class="text-white">RageUI.</span><span class="text-lime-400">StatisticPanelAdvanced</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">'StatisticPanelAdvanced'</span><span class="text-white">,</span> <span class="text-[#efc810]">0</span><span class="text-white">.</span><span class="text-[#efc810]">5</span><span class="text-white">,</span> <span class="text-[#f0a941]">nil</span><span class="text-white">,</span> <span class="text-[#efc810]">0</span><span class="text-white">.</span><span class="text-[#efc810]">5</span><span class="text-white">,</span> <span class="text-[#f0a941]">nil</span><span class="text-white">,</span> <span class="text-[#f0a941]">nil</span><span class="text-white">,</span> <span class="text-[#efc810]">1</span><span class="text-[#129ff1]">)</span></code></pre>

<pre><code><span class="text-white">Keys.</span><span class="text-lime-400">Register</span><span class="text-[#efc810]">(</span><span class="text-[#f1fa8c]">"E"</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">"E"</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">"Exemple"</span><span class="text-white">,</span> <span class="text-[#c169c6]">function()</span>
    <span class="text-white">print</span><span class="text-[#c169c6]">(</span><span class="text-[#f1fa8c]">"toto"</span><span class="text-[#c169c6]">)</span>
<span class="text-[#c169c6]">end</span><span class="text-[#efc810]">)</span>

<span class="text-lime-400">RegisterKeyMapping</span><span class="text-[#efc810]">(</span><span class="text-[#f1fa8c]">"Commande"</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">"Description"</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">"keyboard"</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">"F16"</span><span class="text-[#efc810]">)</span>
</code></pre>


<p class="text-center font-bold text-white mb-2 mt-6 text-[1.7rem]">Example</p>
<pre><code><span class="text-white">Menu</span> <span class="text-[#c169c6]">=</span> <span class="text-white">RageUI.</span><span class="text-lime-400">CreateMenu</span><span class="text-[#efc810]">(</span><span class="text-[#f1fa8c]">'Titre'</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">'Sous Titre'</span><span class="text-[#efc810]">)</span>
<span class="text-white">SubMenu</span> <span class="text-[#c169c6]">=</span> <span class="text-white">RageUI.</span><span class="text-lime-400">CreateSubMenu</span><span class="text-[#efc810]">(</span><span class="text-white">Menu,</span><span class="text-[#f1fa8c]">'Titre'</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">'Sous Titre'</span><span class="text-[#efc810]">)</span>

<span class="text-white">RageUI.</span><span class="text-lime-400">IsVisible</span><span class="text-[#efc810]">(</span><span class="text-white">Menu, </span><span class="text-[#c169c6]">function</span><span class="text-[#129ff1]">()</span>
    <span class="text-white">RageUI.</span><span class="text-lime-400">Separator</span><span class="text-[#efc810]">(</span><span class="text-[#f1fa8c]">'↓ ~g~Véhicule Normaux ~s~↓'</span><span class="text-[#efc810]">)</span>
    <span class="text-white">RageUI.</span><span class="text-lime-400">Button</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">"Text"</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">"Description"</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span><span class="text-white">RightLabel</span> <span class="text-[#c169c6]">=</span> <span class="text-[#f1fa8c]">"→→→"</span><span class="text-[#efc810]">}</span><span class="text-white">,</span> <span class="text-[#f0a941]">true</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span>
        <span class="text-white">onSelected</span> <span class="text-[#c169c6]">= function</span><span class="text-[#129ff1]">()</span>
        <span class="text-[#c169c6]">end</span>
    <span class="text-[#efc810]">}</span><span class="text-[#129ff1]">)</span>
    <span class="text-white">RageUI.</span><span class="text-lime-400">Separator</span><span class="text-[#efc810]">(</span><span class="text-[#f1fa8c]">'↓ ~g~Véhicules Moddées ~s~↓'</span><span class="text-[#efc810]">)</span>
    <span class="text-white">RageUI.</span><span class="text-lime-400">Button</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">"Text"</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">"Description"</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span><span class="text-white">RightLabel</span> <span class="text-[#c169c6]">=</span> <span class="text-[#f1fa8c]">"→→→"</span><span class="text-[#efc810]">}</span><span class="text-white">,</span> <span class="text-[#f0a941]">true</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span>
        <span class="text-white">onSelected</span> <span class="text-[#c169c6]">= function</span><span class="text-[#129ff1]">()</span>
        <span class="text-[#c169c6]">end</span>
    <span class="text-[#efc810]">}</span><span class="text-[#129ff1]">)</span>
    <span class="text-white">RageUI.</span><span class="text-lime-400">Button</span><span class="text-[#129ff1]">(</span><span class="text-[#f1fa8c]">"Text"</span><span class="text-white">,</span> <span class="text-[#f1fa8c]">"Description"</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span><span class="text-white">RightLabel</span> <span class="text-[#c169c6]">=</span> <span class="text-[#f1fa8c]">"→→→"</span><span class="text-[#efc810]">}</span><span class="text-white">,</span> <span class="text-[#f0a941]">true</span><span class="text-white">,</span> <span class="text-[#efc810]">{</span>
        <span class="text-white">onSelected</span> <span class="text-[#c169c6]">= function</span><span class="text-[#129ff1]">()</span>
        <span class="text-[#c169c6]">end</span>
    <span class="text-[#efc810]">}</span><span class="text-[#129ff1]">)</span>
<span class="text-[#c169c6]">end</span><span class="text-[#efc810]">)</span></code></pre>




</main>


</body>