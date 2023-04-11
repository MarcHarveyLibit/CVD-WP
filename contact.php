<?php

    /* 
    Template Name: Contact
    */

?>
<?php get_header();?>
<section class="contacts">
        <div class="container">
            <div class="contacts-title">
                <h2>Contact</h2>
            </div>
            <div class="contacts-wrapper">
                <div class="contacts-left">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem culpa non adipisci placeat
                        distinctio aliquid.</p>
                    <table>
                        <tr>
                            <td><i class="fa-solid fa-phone"></i></td>
                            <td>+639 1231 23123</td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-envelope"></i></td>
                            <td>harveylibit@gmail.com</td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-map-pin"></i></td>
                            <td>Brgy 4 Alaminos, Laguna</td>
                        </tr>
                    </table>
                    <div class="socials">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="contacts-right">
                    <div class="contacts-form">
                        <form action="#">
                            <input type="text" placeholder="NAME">
                            <input type="text" placeholder="EMAIL">
                            <textarea name="" id="" cols="30" rows="10" placeholder="MESSAGE"></textarea>
                            <div class="contacts-btn">
                                <button>SEND MESSAGE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>

