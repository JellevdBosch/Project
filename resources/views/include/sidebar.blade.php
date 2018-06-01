<?php use Illuminate\Support\Facades\Route;?>
<section id="sidebar">
    <div id="sidebar-wrapper">
        <?php

        if (Route::is(‘index’)) {
            echo '<article class="sidebar-article">
                    <div class="sidebar-article-title">
                        <h5 class="">XD</h5>
                    </div>
                    <ul class="sidebar-list">
                        <li class="sidebar-list-item">
                            <button>Test</button>
                        </li>
                        <li class="sidebar-list-item">
                            <button>Test</button>
                        </li>
                    </ul>
                </article>
                <article class="sidebar-article">
                    <div class="sidebar-article-title">
                        <h5 class="">Test</h5>
                    </div>
                    <ul class="sidebar-list">
                        <li class="sidebar-list-item">
                            <button>Test</button>
                        </li>
                        <li class="sidebar-list-item">
                            <button>Test</button>
                        </li>
                    </ul>
                </article>';
        }
        ?>
    </div>
</section>