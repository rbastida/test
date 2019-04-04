{block name="sidebar"}
    
<!-- Sidebar  -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3>{$header_title}</h3>
    </div>

    <ul class="list-unstyled components">
        <p>{$header_name}</p>
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">{$menu1}</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{$link1_option1}">{$menu1_option1}</a>
                </li>
                <li>
                    <a href="{$link1_option2}">{$menu1_option2}</a>
                </li>
                <li>
                    <a href="{$link1_option3}">{$menu1_option3}</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">{$menu2}</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="{$link2_option1}">{$menu2_option1}</a>
                </li>
                <li>
                    <a href="{$link2_option2}">{$menu2_option2}</a>
                </li>
                <li>
                    <a href="{$link2_option3}">{$menu2_option3}</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">{$menu3}</a>
            <ul class="collapse list-unstyled" id="pageSubmenu2">
                <li>
                    <a href="{$link3_option1}">{$menu3_option1}</a>
                </li>
                <li>
                    <a href="{$link3_option2}">{$menu3_option2}</a>
                </li>
                <li>
                    <a href="{$link3_option3}">{$menu3_option3}</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
                    
{/block}