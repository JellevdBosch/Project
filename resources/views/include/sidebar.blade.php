<?php use Illuminate\Support\Facades\Route;?>JTUR
<section id="sidebar">
    <div id="sidebar-wrapper">
        <?php
        $action = Route::getCurrentRoute()->getActionName();
        switch ($action) {
            case strpos($action, 'index'):
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
                break;
            default:
                echo '<article class="sidebar-article">
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
                break;
        }
        ?>
    </div>
</section>