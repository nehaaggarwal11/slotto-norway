<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('casino_access')
                <li class="nav-item">
                    <a href="{{ route("admin.casinos.index") }}" class="nav-link {{ request()->is('admin/casinos') || request()->is('admin/casinos/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-briefcase nav-icon">

                        </i>
                        {{ trans('cruds.casino.title') }}
                    </a>
                </li>
            @endcan
            
            @can('sports_access')
                <li class="nav-item">
                    <a href="{{ route("admin.sports.index") }}" class="nav-link {{ request()->is('admin/sports') || request()->is('admin/sports/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-briefcase nav-icon">

                        </i>
                        {{ trans('cruds.sport.title') }}
                    </a>
                </li>
            @endcan

            @can('game_access')
                <li class="nav-item">
                    <a href="{{ route("admin.games.index") }}" class="nav-link {{ request()->is('admin/games') || request()->is('admin/games/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-briefcase nav-icon">

                        </i>
                        {{ trans('cruds.game.title') }}
                    </a>
                </li>
            @endcan

            @can('news_access')
                <li class="nav-item">
                    <a href="{{ route("admin.news.index") }}" class="nav-link {{ request()->is('admin/news') || request()->is('admin/news/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-briefcase nav-icon">

                        </i>
                        {{ trans('cruds.news.title') }}
                    </a>
                </li>
            @endcan

            @can('comment_access')
                <li class="nav-item">
                    <a href="{{ route("admin.comments.index") }}" class="nav-link {{ request()->is('admin/comments') || request()->is('admin/comments/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-briefcase nav-icon">

                        </i>
                        {{ trans('cruds.comment.title') }}
                    </a>
                </li>
            @endcan

            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('content_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-book nav-icon">

                        </i>
                        {{ trans('cruds.contentManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('content_category_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.content-categories.index") }}" class="nav-link {{ request()->is('admin/content-categories') || request()->is('admin/content-categories/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon">

                                    </i>
                                    {{ trans('cruds.contentCategory.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('content_tag_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.content-tags.index") }}" class="nav-link {{ request()->is('admin/content-tags') || request()->is('admin/content-tags/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-tags nav-icon">

                                    </i>
                                    {{ trans('cruds.contentTag.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('content_page_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.content-pages.index") }}" class="nav-link {{ request()->is('admin/content-pages') || request()->is('admin/content-pages/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-file nav-icon">

                                    </i>
                                    {{ trans('cruds.contentPage.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('static_page_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-book nav-icon"></i>
                        {{ trans('cruds.staticPage.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('static_page_landing_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.static-pages.edit", "landing-page") }}" class="nav-link
                                   {{ request()->is('admin/static-pages/landing-page') || request()->is('admin/static-pages/landing-page/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon"></i>
                                    {{ trans('cruds.staticPage.landing-page.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('static_page_home_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.static-pages.edit", "home") }}" class="nav-link
                                   {{ request()->is('admin/static-pages/home') || request()->is('admin/static-pages/home/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon"></i>
                                    {{ trans('cruds.staticPage.home.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('static_page_new_casino_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.static-pages.edit", "new-casino") }}" class="nav-link
                               {{ request()->is('admin/static-pages/new-casino') || request()->is('admin/static-pages/new-casino/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon"></i>
                                    {{ trans('cruds.staticPage.new-casino.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('static_page_casino_bonus_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.static-pages.edit", "casino-bonus") }}" class="nav-link
                               {{ request()->is('admin/static-pages/casino-bonus') || request()->is('admin/static-pages/casino-bonus/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon"></i>
                                    {{ trans('cruds.staticPage.casino-bonus.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('static_page_all_game_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.static-pages.edit", "all-game") }}" class="nav-link
                               {{ request()->is('admin/static-pages/all-game') || request()->is('admin/static-pages/all-game/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon"></i>
                                    {{ trans('cruds.staticPage.all-game.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('static_page_sport_casino_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.static-pages.edit", "sport-casino") }}" class="nav-link
                               {{ request()->is('admin/static-pages/sport-casino') || request()->is('admin/static-pages/sport-casino/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon"></i>
                                    {{ trans('cruds.staticPage.sport-casino.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('static_page_about_us_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.static-pages.edit", "about-us") }}" class="nav-link
                               {{ request()->is('admin/static-pages/about-us') || request()->is('admin/static-pages/about-us/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon"></i>
                                    {{ trans('cruds.staticPage.about-us.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('static_page_privacy_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.static-pages.edit", "privacy") }}" class="nav-link
                               {{ request()->is('admin/static-pages/privacy') || request()->is('admin/static-pages/privacy/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon"></i>
                                    {{ trans('cruds.staticPage.privacy.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('static_page_responsible_gaming_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.static-pages.edit", "responsible-gaming") }}" class="nav-link
                               {{ request()->is('admin/static-pages/responsible-gaming') || request()->is('admin/static-pages/responsible-gaming/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon"></i>
                                    {{ trans('cruds.staticPage.responsible-gaming.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('static_page_terms_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.static-pages.edit", "terms") }}" class="nav-link
                               {{ request()->is('admin/static-pages/terms') || request()->is('admin/static-pages/terms/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon"></i>
                                    {{ trans('cruds.staticPage.terms.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('static_page_general_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.static-pages.edit", "general") }}" class="nav-link
                               {{ request()->is('admin/static-pages/general') || request()->is('admin/static-pages/general/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon"></i>
                                    {{ trans('cruds.staticPage.general.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('static_page_cookies_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.static-pages.edit", "cookies") }}" class="nav-link
                               {{ request()->is('admin/static-pages/cookies') || request()->is('admin/static-pages/cookies/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon"></i>
                                    {{ trans('cruds.staticPage.cookies.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('static_page_faq_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.static-pages.edit", "faq") }}" class="nav-link
                               {{ request()->is('admin/static-pages/faq') || request()->is('admin/static-pages/faq/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon"></i>
                                    {{ trans('cruds.staticPage.faq.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('static_page_news_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.static-pages.edit", "news") }}" class="nav-link
                               {{ request()->is('admin/static-pages/news') || request()->is('admin/static-pages/news/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon"></i>
                                    {{ trans('cruds.staticPage.news.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('static_page_sitemap_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.static-pages.edit", "sitemap") }}" class="nav-link
                               {{ request()->is('admin/static-pages/sitemap') || request()->is('admin/static-pages/sitemap/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon"></i>
                                    {{ trans('cruds.staticPage.sitemap.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('static_page_newsletter_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.static-pages.edit", "newsletter") }}" class="nav-link
                               {{ request()->is('admin/static-pages/newsletter') || request()->is('admin/static-pages/newsletter/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon"></i>
                                    {{ trans('cruds.staticPage.newsletter.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('faq_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-question nav-icon">

                        </i>
                        {{ trans('cruds.faqManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('faq_category_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.faq-categories.index") }}" class="nav-link {{ request()->is('admin/faq-categories') || request()->is('admin/faq-categories/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.faqCategory.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('faq_question_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.faq-questions.index") }}" class="nav-link {{ request()->is('admin/faq-questions') || request()->is('admin/faq-questions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-question nav-icon">

                                    </i>
                                    {{ trans('cruds.faqQuestion.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('subscriber_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-at nav-icon">

                        </i>
                        {{ trans('cruds.subscriber.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{ route("admin.subscribers.index") }}" class="nav-link {{ request()->is('admin/subscribers') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-briefcase nav-icon"></i>
                                {{ trans('cruds.subscriber.list_title') }}
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{ route("admin.subscribers.email-builder") }}" class="nav-link {{ request()->is('admin/subscribers/email-builder') || request()->is('admin/subscribers/email-builder/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-briefcase nav-icon"></i>
                                {{ trans('cruds.subscriber.email_builder_title') }}
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan
            @can('static_page_setting_access')
                <li class="nav-item">
                    <a href="{{ route("admin.static-pages.edit", "setting") }}" class="nav-link
                               {{ request()->is('admin/static-pages/setting') || request()->is('admin/static-pages/setting/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-folder nav-icon"></i>
                        {{ trans('cruds.staticPage.setting.title') }}
                    </a>
                </li>
            @endcan
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt"></i>
                    {{ trans('global.logout') }}
                </a>
                {{--<a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>--}}
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
