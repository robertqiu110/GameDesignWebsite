<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127221484-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127221484-1');
</script>
    <title>Game Design and Development</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon1.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon1.png">
    <link href="https://fonts.googleapis.com/css?family=Abel|Josefin+Sans|Quicksand|Saira+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-light_blue.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
</head>

<body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <?php 
            $title="Labs";
            include 'header.php';
        ?>
        <div class="background labs"></div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->
                <br /><br /><br />
                <h1 class="section-title" id="course-description">LABS</h1>
                <ul class='mdl-list'>
                    <a class="no-hover" href="https://github.com/berkeleyGamedev/UnityBasics">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/Basics.PNG">
                            <span class="mdl-list__item-primary-content">
                                <span>Unity Basics</span>
                                <span class="mdl-list__item-text-body">
                                    Most basic introduction to all things Unity. This lab goes over the format, object
                                    structure and most general information of Unity. This does not require any
                                    knowledge of Unity, coding or art. By the end of the lab, you’ll have made a simple
                                    space game moving around to get collectibles.
                                </span>
                            </span>
                        </li>
                    </a>
                    <a class="no-hover" href="https://github.com/berkeleyGamedev/BasicScriptingLab">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/Basic Scripting.png">
                            <span class="mdl-list__item-primary-content">
                                <span>Basic Scripting</span>
                                <span class="mdl-list__item-text-body">
                                    By jove, this is it. This is your first lab in Unity which will implement various
                                    gameplay mechanics with using public variables and the inspector. Enemy attacks and
                                    player health are affected using code and the inspector in this lab. Coding will
                                    not be covered in this lab, but programmers should read the additional passages for
                                    more information on the code itself. Prefabs, a base for various kinds of
                                    GameObjects, are covered in this lab from their creation as well as their use.
                                    Enemies will be derived from a base prefab called Enemy, and students will create a
                                    new enemy based off of the Prefab.
                                </span>
                            </span>
                        </li>
                    </a>
                    <a class="no-hover" href="https://github.com/berkeleyGamedev/Advanced-Scripting">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/Advanced Scripting.PNG">
                            <span class="mdl-list__item-primary-content">
                                <span>Advanced Scripting</span>
                                <span class="mdl-list__item-text-body">
                                    Remember basic scripting? This is level 2. Complete a fruit ninja like game by
                                    implementing a number of things such as a spawner and the “fruit.” Also, you get to
                                    learn a number of ways to keep your code organized and clean so that when you work
                                    in a team, other programmers do not have trouble working with your code.
                                </span>
                            </span>
                        </li>
                    </a>
                    <a class="no-hover" href="https://github.com/berkeleyGamedev/Rigidbody-Basics">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/Rigidbody and Movement Basics.png">
                            <span class="mdl-list__item-primary-content">
                                <span>Rigidbody Basics</span>
                                <span class="mdl-list__item-text-body">
                                    In this basic lab, you’ll be learning all about Rigidbodies, the component that
                                    controls an object’s position through physics simulation. Through Rigidbodies,
                                    you’ll learn about all the components necessary to achieve basic smooth movement.
                                    There will also be an introduction to input settings! Extremely important unless
                                    you plan on making a text based adventure game.
                                </span>
                            </span>
                        </li>
                    </a>
                    <a class="no-hover" href="https://github.com/berkeleyGamedev/ColliderLab">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/CollidersScreenshot.png">
                            <span class="mdl-list__item-primary-content">
                                <span>Colliders</span>
                                <span class="mdl-list__item-text-body">
                                    In this lab you’ll learn all about colliders - the part of Unity’s physics engine
                                    that lets objects actually interact with each other. By the end of this lab, you’ll
                                    have learned the difference between physical and trigger colliders, become familiar
                                    with all the functions you need to know to use colliders effectively, and have used
                                    colliders to create a basic platformer and a simple motion-activated boss.
                                </span>
                            </span>
                        </li>
                    </a>
                    <a class="no-hover" href="https://github.berkeley.edu/berkeley-gamedev/CoroutinesLab">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/CoroutinesScreenshot.jpg">
                            <span class="mdl-list__item-primary-content">
                                <span>Coroutines</span>
                                <span class="mdl-list__item-text-body">
                                    In this lab, you’ll learn all about Unity coroutines! Coroutines are an amazing
                                    tool to make cool looking transitions, smooth out your movement and animations, and
                                    improve the performance of your game, so they’re definitely worth learning! Through
                                    the course of this lab, you’ll implement color fading, enemy spawning, and smooth
                                    movement and develop a solid understanding of coroutines that will allow you to
                                    apply them in a wide variety of situations going forward.
                                </span>
                            </span>
                        </li>
                    </a>
                    <a class="no-hover" href="https://github.com/berkeleyGamedev/AnimationLab">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/Animation.png">
                            <span class="mdl-list__item-primary-content">
                                <span>Sprite Animations</span>
                                <span class="mdl-list__item-text-body">
                                    In this lab, you will be getting a preview of the game animation pipeline, from a
                                    Photoshop sprite to a finished Unity animation. Along with introducing the basics
                                    of animation principles, we will be introducing two methods of creating animations:
                                    a sprite-based method, and a puppet-based method that uses many of the tools that
                                    3D animations use.
                                </span>
                            </span>
                        </li>
                    </a>
                    <a class="no-hover" href="https://github.com/berkeleyGamedev/AnimatorAndBlendTreesLab">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/Blend Trees.png">
                            <span class="mdl-list__item-primary-content">
                                <span>Animator/Blend Tree</span>
                                <span class="mdl-list__item-text-body">
                                    In this lab, you’ll create smooth transitions between 2D animations using Blend
                                    Trees. Blend trees are a must for organizing complicated animation transitions in
                                    Animator. They’re used to quickly handle transitions between animations when the
                                    player provides new input. In 3D games, they actually interpolate between the two
                                    animations, creating a smooth transition. We will only be going over the 2D
                                    version, but all the concepts apply to 3D animations.
                                </span>
                            </span>
                        </li>
                    </a>
                    <a class="no-hover" href="https://github.com/berkeleyGamedev/SpritingLab">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/Spriting.png">
                            <span class="mdl-list__item-primary-content">
                                <span>Pixel Art Spriting</span>
                                <span class="mdl-list__item-text-body">
                                    In this lab, you will cover the basics of pixel spriting. It will teach you some of
                                    the technical ideas such as jaggies and dithering so that you are able to create
                                    your own game ready sprites and assets. It also covers the basic workflow as well
                                    as useful resources in learning even more. This lab is in Photoshop; however you
                                    can use any other pixel sprinting software. Unity is not required for this lab.
                                </span>
                            </span>
                        </li>
                    </a>
                    <a class="no-hover" href="https://github.com/berkeleyGamedev/UILab">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/UI_Lab.png">
                            <span class="mdl-list__item-primary-content">
                                <span>User Interface (UI)</span>
                                <span class="mdl-list__item-text-body">
                                    This is a lab to get you acquainted with UI in Unity. You will create a basic shop
                                    using all UI elements. It will cover everything step by step from what a canvas is
                                    to implementing masks. This first half of this lab goes over the Unity components
                                    you need and the second half is split, where programmers learn the scripting
                                    required for events and artists learn about the design behind UI.
                                </span>
                            </span>
                        </li>
                    </a>
                    <a class="no-hover" href="https://github.com/berkeleyGamedev/DelegatesAndEventsLab">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/Delegates And Events.PNG">
                            <span class="mdl-list__item-primary-content">
                                <span>Delegates and Events</span>
                                <span class="mdl-list__item-text-body">
                                    Complete a top down survival shooter by implementing delegates and events. You will
                                    learn about what they are, how to use them and most importantly, why to use them as
                                    you create the game.
                                </span>
                            </span>
                        </li>
                    </a>
                    <a class="no-hover" href="https://github.com/berkeleyGamedev/IntroToLightingLab">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/Lighting.png">
                            <span class="mdl-list__item-primary-content">
                                <span>Lighting</span>
                                <span class="mdl-list__item-text-body">
                                    This lab covers the basics of Unity lighting in 3D, from the different types of
                                    lights to how lights interact with objects and materials. It touches into different
                                    lighitng effects and model materials and shaders. Lighting can change the entire
                                    mood and by the end of the lab, you'll know how to manipulate the basics to achieve
                                    the desired effect in Unity.
                                </span>
                            </span>
                        </li>
                    </a>
                    <a class="no-hover" href="https://github.com/berkeleyGamedev/AudioLab">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/Audio Lab.png">
                            <span class="mdl-list__item-primary-content">
                                <span>Audio</span>
                                <span class="mdl-list__item-text-body">
                                    Ready to have your collective brains blown out by awesome audio? Good. This lab
                                    covers the built in Unity tools for audio mixing and effects. The lab covers an
                                    audio manager script for managing various audio sources, and the lab will also
                                    cover audio mixers. Audio mixers allow for different effects and sounds to have
                                    different output volumes and various adjustments such as lowpass, reverb, and more.
                                    This lab does not cover spatial audio, audio editing, or music composition.
                                </span>
                            </span>
                        </li>
                    </a>
                    <a class="no-hover" href="https://github.com/berkeleyGamedev/TransitioningSavingAndBuildingLab">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/TranSavBuild.PNG">
                            <span class="mdl-list__item-primary-content">
                                <span>Transitioning, Saving, and Building Scenes</span>
                                <span class="mdl-list__item-text-body">
                                    In this lab we introduce you to transitioning from one scene to a new scene, saving
                                    data so that it persists both between scenes and between game sessions, and
                                    building an executable to test everything.
                                </span>
                            </span>
                        </li>
                    </a>
                    <a class="no-hover" href="https://github.com/berkeleyGamedev/ParticleEffectsLab">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/Intro To Particle Effects.PNG">
                            <span class="mdl-list__item-primary-content">
                                <span>Particle Effects</span>
                                <span class="mdl-list__item-text-body">
                                    Learn about the thought process that goes into creating a lightning effect as you
                                    create your own customizable lightning effect. By going through this lab, you will
                                    gain a basic understanding over a few of the particle system modules and moving
                                    forward, you will have the ability to use those modules to create your own unique
                                    effects.
                                </span>
                            </span>
                        </li>
                    </a>
                    <a class="no-hover" href="https://github.com/berkeleyGamedev/3DRiggingSkinnnigAndAnimatingLab">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/3DRigSkinAnim.PNG">
                            <span class="mdl-list__item-primary-content">
                                <span>3D Rigging, Skinning, and Animating</span>
                                <span class="mdl-list__item-text-body">
                                    This lab covers how to rig, skin, and animate in Maya. Rigging is the act of
                                    deciding where the various joints and bones of a model will be placed, skinning
                                    means to merge the bones and joints with the actual model so that the model can be
                                    manipulated, and animating is the actual animation of the model using the joints
                                    and bones.
                                </span>
                            </span>
                        </li>
                    </a>
                    <a class="no-hover" href="https://github.com/berkeleyGamedev/RaycastingLab">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/Raycasting.PNG">
                            <span class="mdl-list__item-primary-content">
                                <span>Raycasting</span>
                                <span class="mdl-list__item-text-body">
                                    Here we explain the basics of raycasting in 2D. We go over how to use a few
                                    different types of shapes and how exactly they work in comparison to the default
                                    ray. At the end, you will have completed a very small and basic game all about
                                    shooting down circles with your lasers.
                                </span>
                            </span>
                        </li>
                    </a>
                    <a class="no-hover" href="https://github.com/berkeleyGamedev/TilemapLab">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/Tilemaps.png">
                            <span class="mdl-list__item-primary-content">
                                <span>Tilemaps</span>
                                <span class="mdl-list__item-text-body">
                                    In this lab, you’ll learn how to use Tilemaps to create a level. It will go over
                                    the process of cutting a spritesheet and assigning sprites to specific tiles. The
                                    Unity implemented Tilemap is able to easily create new levels with specific tiles
                                    that contain rules, animations, randomizationndom generation, and tile setting
                                    conditions. It is an easy way to make many levels and, once set up, easy for
                                    everyone of all programming levels to do. With more programming, more unique
                                    brushes, rulesets and randomization can be created to generate dynamic levels
                                    without the hassle of gameobjects and prefabs.
                                </span>
                            </span>
                        </li>
                    </a>
                    <a class="no-hover" href="https://github.com/berkeleyGamedev/RigidbodyAdvanced">
                        <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                            <img class="lab-image" src="images/labs/Rigidbody Advanced.png">
                            <span class="mdl-list__item-primary-content">
                                <span>Advanced Movement</span>
                                <span class="mdl-list__item-text-body">
                                    Dive into the finer details of movement. In this lab you’ll be learning more about
                                    advanced movement mechanics and how your design choices in game might impact your
                                    movement decisions. Also learn about aerial movement, friction, and bounciness
                                    levels. Finally, you’ll be learning about some design philosophy regarding aerial
                                    movement and jumping.
                                </span>
                            </span>
                        </li>
                    </a>
                </ul>
            </div>
            <!-- fixes a bug for some reason -->
            <div class="mdl-button__container">
            </div>
            <?php include 'footer.php'; ?>
        </main>
    </div>
</body>

</html>