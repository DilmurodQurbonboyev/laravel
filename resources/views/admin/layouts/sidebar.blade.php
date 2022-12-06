<aside class="main-sidebar sidebar-dark-primary">
    <a class="brand-link">
        <img src="{{ asset('img/gerb.png') }}" alt="logo">
        <span class="brand-text">
            {{ M::t("Laravel") }}
        </span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                       class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>{{ M::t('Dashboard') }}</p>
                    </a>
                </li>
                @can('admin')
                    <li
                        class="nav-item {{ request()->routeIs('users.*', 'authorities.*') ? 'menu-open' : '' }}">
                        <a
                            class="nav-link {{ request()->routeIs('users.*', 'authorities.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-cog"></i>
                            <p>{{ M::t('Admin Panel') }}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}"
                                   class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>{{ M::t('Users') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('authorities.index') }}"
                                   class="nav-link {{ request()->routeIs('authorities.*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-user-shield"></i>
                                    <p>{{ M::t('Authorities') }}</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can('content-manager')
                    <li
                        class="nav-item {{ request()->routeIs(['menus.*', 'menus-category.*', 'news.*', 'files.*', 'contacts.*', 'news-category.*', 'photos.*', 'photos-category.*', 'videos.*', 'videos-category.*', 'pages.*', 'pages-category.*', 'answers.*', 'answers-category.*', 'links.*', 'links-category.*', 'useful.*', 'messages.*', 'useful-category.*','regions.*', 'managements-category.*', 'managements.*']) ? 'menu-open' : '' }}">
                        <a
                            class="nav-link {{ request()->routeIs(['menus.*', 'menus-category.*', 'news.*', 'files.*', 'contacts.*', 'news-category.*', 'photos.*', 'photos-category.*', 'videos.*', 'videos-category.*', 'pages.*', 'pages-category.*', 'answers.*', 'answers-category.*', 'links.*', 'links-category.*', 'useful.*', 'messages.*', 'useful-category.*','regions.*', 'managements-category.*', 'managements.*']) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-sitemap"></i>
                            <p>{{ M::t('Site Management') }}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li
                                class="nav-item {{ request()->routeIs('menus.*', 'menus-category.*') ? 'menu-open' : '' }}">
                                <a class="nav-link {{ request()->routeIs('menus.*', 'menus-category.*') ? 'active' : '' }}"
                                   href="javascript:void(0);">
                                    <i class="nav-icon fas fa-bars"></i>
                                    <p>{{ M::t('Menus') }}
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('menus-category.*') ? 'active' : '' }}"
                                           href="{{ route('menus-category.index') }}">
                                            <i class="nav-icon fas fa-circle"></i>
                                            <p>{{ M::t('Menu Categories') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('menus.*') ? 'active' : '' }}"
                                           href="{{ route('menus.index') }}">
                                            <i class="nav-icon fas fa-circle"></i>
                                            <p>{{ M::t('Menus') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li
                                class="nav-item {{ request()->routeIs('news.*', 'news-category.*') ? 'menu-open' : '' }}">
                                <a class="nav-link {{ request()->routeIs('news.*', 'news-category.*') ? 'active' : '' }}"
                                   href="javascript:void(0);">
                                    <i class="nav-icon fas fa-newspaper"></i>
                                    <p>{{ M::t('News') }}
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('news-category.*') ? 'active' : '' }}"
                                           href="{{ route('news-category.index') }}">
                                            <i class="nav-icon fas fa-circle"></i>
                                            <p>{{ M::t('News Categories') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('news.*') ? 'active' : '' }}"
                                           href="{{ route('news.index') }}">
                                            <i class="nav-icon fas fa-circle"></i>
                                            <p>{{ M::t('News') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li
                                class="nav-item {{ request()->routeIs('pages.*', 'pages-category.*') ? 'menu-open' : '' }}">
                                <a class="nav-link {{ request()->routeIs('pages.*', 'pages-category.*') ? 'active' : '' }}"
                                   href="javascript:void(0);">
                                    <i class="nav-icon fas fa-file-alt"></i>
                                    <p>{{ M::t('Pages') }}
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('pages-category.*') ? 'active' : '' }}"
                                           href="{{ route('pages-category.index') }}">
                                            <i class="nav-icon fas fa-circle"></i>
                                            <p>{{ M::t('Page Categories') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('pages.*') ? 'active' : '' }}"
                                           href="{{ route('pages.index') }}">
                                            <i class="nav-icon fas fa-circle"></i>
                                            <p>{{ M::t('Pages') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
{{--                            <li--}}
{{--                                class="nav-item {{ request()->routeIs('answers.*', 'answers-category.*') ? 'menu-open' : '' }}">--}}
{{--                                <a class="nav-link {{ request()->routeIs('answers.*', 'answers-category.*') ? 'active' : '' }}"--}}
{{--                                   href="javascript:void(0);">--}}
{{--                                    <i class="nav-icon fab fa-weixin"></i>--}}
{{--                                    <p>{{ M::t('Answers') }}--}}
{{--                                        <i class="right fas fa-angle-left"></i>--}}
{{--                                    </p>--}}
{{--                                </a>--}}
{{--                                <ul class="nav nav-treeview">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link {{ request()->routeIs('answers-category.*') ? 'active' : '' }}"--}}
{{--                                           href="{{ route('answers-category.index') }}">--}}
{{--                                            <i class="nav-icon fas fa-circle"></i>--}}
{{--                                            <p>{{ M::t('Answer Categories') }}</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link {{ request()->routeIs('answers.*') ? 'active' : '' }}"--}}
{{--                                           href="{{ route('answers.index') }}">--}}
{{--                                            <i class="nav-icon fas fa-circle"></i>--}}
{{--                                            <p>{{ M::t('Answers') }}</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                            <li
                                class="nav-item {{ request()->routeIs('useful.*', 'useful-category.*') ? 'menu-open' : '' }}">
                                <a class="nav-link {{ request()->routeIs('useful.*', 'useful-category.*') ? 'active' : '' }}"
                                   href="javascript:void(0);">
                                    <i class="nav-icon fas fa-tv"></i>
                                    <p>{{ M::t('Useful') }}
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('useful-category.*') ? 'active' : '' }}"
                                           href="{{ route('useful-category.index') }}">
                                            <i class="nav-icon fas fa-circle"></i>
                                            <p>{{ M::t('Useful Categories') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('useful.*') ? 'active' : '' }}"
                                           href="{{ route('useful.index') }}">
                                            <i class="nav-icon fas fa-circle"></i>
                                            <p>{{ M::t('Useful') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item {{ request()->routeIs('photos.*', 'photos-category.*') ? 'menu-open' : '' }}">
                                <a
                                    class="nav-link {{ request()->routeIs('photos.*', 'photos-category.*') ? 'active' : '' }}"
                                    href="javascript:void(0);">
                                    <i class="nav-icon fas fa-camera"></i>
                                    <p>{{ M::t('Photos') }}
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a
                                            class="nav-link {{ request()->routeIs('photos-category.*') ? 'active' : '' }}"
                                            href="{{ route('photos-category.index') }}">
                                            <i class="nav-icon fas fa-circle"></i>
                                            <p>{{ M::t('Photos Categories') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('photos.*') ? 'active' : '' }}"
                                           href="{{ route('photos.index') }}">
                                            <i class="nav-icon fas fa-circle"></i>
                                            <p>{{ M::t('Photos') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item {{ request()->routeIs('videos.*', 'videos-category.*') ? 'menu-open' : '' }}">
                                <a class="nav-link {{ request()->routeIs('videos.*', 'videos-category.*') ? 'active' : '' }}"
                                   href="javascript:void(0);">
                                    <i class="nav-icon fas fa-photo-video"></i>
                                    <p>{{ M::t('Video Gallery') }}
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('videos-category.*') ? 'active' : '' }}"
                                           href="{{ route('videos-category.index') }}">
                                            <i class="nav-icon fas fa-circle"></i>
                                            <p>{{ M::t('Videos Categories') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('videos.*') ? 'active' : '' }}"
                                           href="{{ route('videos.index') }}">
                                            <i class="nav-icon fas fa-circle"></i>
                                            <p>{{ M::t('Videos') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li
                                class="nav-item {{ request()->routeIs('managements.*','regions.*', 'managements-category.*') ? 'menu-open' : '' }}">
                                <a class="nav-link {{ request()->routeIs('managements.*','regions.*', 'managements-category.*') ? 'active' : '' }}"
                                   href="javascript:void(0);">
                                    <i class="nav-icon fas fa-user-tie"></i>
                                    <p>{{ M::t('Managements') }}
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('managements-category.*') ? 'active' : '' }}"
                                           href="{{ route('managements-category.index') }}">
                                            <i class="nav-icon fas fa-circle"></i>
                                            <p>{{ M::t('Management Categories') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('managements.*') ? 'active' : '' }}"
                                           href="{{ route('managements.index') }}">
                                            <i class="nav-icon fas fa-circle"></i>
                                            <p>{{ M::t('Managements') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('regions.*') ? 'active' : '' }}"
                                           href="{{ route('regions.index') }}">
                                            <i class="nav-icon fas fa-circle"></i>
                                            <p>{{ M::t('Regions') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('messages.*') ? 'active' : '' }}"
                                   href="{{ route('messages.index') }}">
                                    <i class="nav-icon fas fa-language"></i>
                                    <p>{{ M::t('Messages') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('contacts.*') ? 'active' : '' }}"
                                   href="{{ route('contacts.index') }}">
                                    <i class="nav-icon fas fa-address-book"></i>
                                    <p>{{ M::t('Contacts') }}</p>
                                </a>
                            </li>
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link {{ request()->routeIs('files.*') ? 'active' : '' }}"--}}
{{--                                   href="{{ route('files.index') }}">--}}
{{--                                    <i class="nav-icon fab fa-html5"></i>--}}
{{--                                    <p>{{ M::t('Files') }}</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                        </ul>
                    </li>
                @endcan
                @can('super-admin')
                    <li
                        class="nav-item {{ request()->routeIs('authentication-logs.*', 'logs.*') ? 'menu-open' : '' }}">
                        <a
                            class="nav-link {{ request()->routeIs(['authentication-logs.*', 'logs.*']) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-book"></i>
                            <p>{{ M::t('Logs') }}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('authentication-logs.index') }}"
                                   class="nav-link {{ request()->routeIs('authentication-logs.*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-circle"></i>
                                    <p>{{ M::t('Authentification Logs') }}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('logs.index') }}"
                                   class="nav-link {{ request()->routeIs('logs.*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-circle"></i>
                                    <p>{{ M::t('Site Logs') }}</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
            </ul>
        </nav>
    </div>
</aside>
