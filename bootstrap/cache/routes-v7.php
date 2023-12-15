<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/filemanager' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filemanager.base_route',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'filemanager.action_route',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ei673qTOGUsjiZqJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qTh30q9mlbYVxwjs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/livewire/message/([^/]++)(*:107)|/([^/]++)/livewire/message/([^/]++)(*:150)|/livewire/preview\\-file/([^/]++)(*:190)|/([^/]++)/(?|register(?|(*:222))|log(?|out(?|(*:243))|in(?|(*:257)))|password/(?|reset(?|(*:287)|/([^/]++)(*:304)|(*:312))|email(*:326)|confirm(?|(*:344)))|admin(?|/(?|s(?|ub(?|scribers(?|/(?|export(*:396)|delete/([^/]++)(*:419))|(*:428))|mission(?|s(*:448)|/(?|([^/]++)(*:468)|destroy/([^/]++)(*:492))))|e(?|ction(?|s(?|(*:519)|/(?|create(?|(*:540))|edit/([^/]++)(?|(*:565))|destroy/([^/]++)(*:590)|arrange(*:605)))|/(?|([^/]++)/posts(?|(*:636)|/create(?|(*:654)))|posts/([^/]++)/(?|edit(?|(*:689))|delete(*:704)|file/([^/]++)(*:725))))|ttings/edit(?|(*:750))))|u(?|sers(?|(*:772)|/(?|add(?|(*:790))|edit/([^/]++)(?|(*:815))|show/([^/]++)(*:837)|logs/([^/]++)(*:858)|([^/]++)/authentication\\-logs(*:895)|destroy/([^/]++)(*:919)))|p(?|date_profile(*:945)|load/image(?|(*:966)|/delete(?|(*:984)))))|profile(?|(*:1006))|forms(?|(*:1024)|/(?|create(*:1043)|store(*:1057)|edit/([^/]++)(*:1079)|update/([^/]++)(*:1103)|destroy/([^/]++)(?|(*:1131)|(*:1140))|arrange(*:1157)))|banners/([^/]++)(?|(*:1187)|/(?|create(?|(*:1209))|edit(?|(*:1226))|delete(*:1242)))|directories/(?|([^/]++)(?|(*:1279)|/(?|create(?|(*:1301))|edit(?|(*:1318))|delete(*:1334)))|arrange(*:1352))|languages/edit(?|(*:1379))|component(?|s(?:/([^/]++))?(*:1416)|/(?|create(?|(*:1438))|([^/]++)/(?|edit(?|(*:1467))|destroy(*:1484))|arrange/([^/]++)(*:1510))|Posts/(?|([^/]++)(*:1537)|create(?|/([^/]++)(*:1564)|(*:1573)))|able/(?|sort(*:1596)|([^/]++)(*:1613)|create(?|/([^/]++)(*:1640)|(*:1649))|edit(?|/([^/]++)(*:1675)|(*:1684))|delete/([^/]++)(*:1709))))|(*:1721))|s(?|ub(?|mission(*:1747)|scribe(*:1762))|earch(*:1777)))|/([^/]++)?(*:1798)|/([^/]++)/(?|(.*)(*:1824)|front(*:1838)|photo(*:1852)|contact(*:1868)|text\\-page(*:1887)|home\\-page(*:1906)))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message-localized',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      222 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k09rXNOq0z7Sikuh',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      243 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H6pjj16T1WoKKaHX',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nZRNEowFVwtrhOzT',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      287 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      312 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      326 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZWkvKlpcoM1yvbKp',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      396 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::47PWpSG4NwAHsMgX',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      419 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gcx6qTmAzROLaSfs',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WgqwL0OexYOtoUM7',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dIQEGLnf0bxrOiYg',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      468 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E19MsAYEXuAvb0N0',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'submission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tDccqbN6MWMtpBAy',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'submission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      519 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'section.list',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      540 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j9te22tozVh5uog0',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G17b8eZdopfSPj44',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      565 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'section.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zNdk82XKeP3RQWRk',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      590 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ifOU84FCiMdPmvMc',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      605 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5c41sIWC2bECZJSL',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.list',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'sec',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      654 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.create',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'section_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'post.store',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'section_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      689 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'post.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'post',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      704 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.destroy',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      725 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.deletefiles',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'post',
            2 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      750 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      772 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      790 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0ekRcGmA52HPH7WW',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S4wiZqPZ8JeD19rM',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      815 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F2qeq0MvFgxR0Iqi',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fnWziefMAnQyF1yh',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      837 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n3M7BrowNwDIo5Ew',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uLVw7Mi1N2mkk360',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      895 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'authentication.logs',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      919 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tim5iR2WkaIkQsoH',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      945 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateProfile',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      966 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'image.upload',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      984 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'image.del',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'image.clear',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1006 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'asdasdsa',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tBjvfOhjh5dhOp1l',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1024 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forms.index',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1043 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forms.create',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1057 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forms.store',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1079 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forms.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'form',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1103 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forms.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'form',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forms.destroy',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'form',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forms.destroy.formField',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'formField',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1157 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EzmsQxM5wJ9fLfTL',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'banner.list',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1209 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'banner.create',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'banner.store',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'type',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'banner.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'banner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'banner.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'banner',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1242 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'banner.destroy',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'banner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1279 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'directory.list',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1301 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'directory.create',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'directory.store',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'type',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1318 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'directory.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'directory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'directory.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'directory',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1334 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'directory.destroy',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'directory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1352 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8PsrKtraYI6G5z7s',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1379 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'languages.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1416 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'components.index',
            'locale' => NULL,
            'sec' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'sec',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1438 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::loXN4wweQGhRgCH7',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'component.create',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ImRTGVjkfPfah0RM',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CVhuTnrS1JYuRhWR',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1484 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mwg8eZUY8gfiI8GR',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1510 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::py8Ms0KaDQRrXUjb',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1537 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'componentPosts.index',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'component_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6ern8ia9gQZ9ofjd',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'component_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'component.store',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1596 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'componentable.sort',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1613 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'componentable.index',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1640 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'componanatable.create',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1649 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'componanatable.store',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1675 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'componanatable.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'componentable',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1684 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'componanatable.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1709 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'componanatable.destroy',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'componentable',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1721 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1747 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submission',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1762 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscribe',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1777 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1798 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DWGVdVotm1roR70I',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1824 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UZr8wJYKyWGXoqLj',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'all',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1838 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pDjSzretdPOmBpOp',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1852 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F4zYImw7jsT9lN1q',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1868 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZYzZP3j3gXqmQFBx',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1887 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HlEDnEB5LEbuUc7b',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1906 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U1wh5LSspi8mcbmO',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filemanager.base_route' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/filemanager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Haruncpi\\LaravelSimpleFilemanager\\Controllers\\FilemanagerController@getIndex',
        'controller' => '\\Haruncpi\\LaravelSimpleFilemanager\\Controllers\\FilemanagerController@getIndex',
        'namespace' => '\\Haruncpi\\LaravelSimpleFilemanager\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'filemanager.base_route',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filemanager.action_route' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/filemanager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Haruncpi\\LaravelSimpleFilemanager\\Controllers\\FilemanagerController@postAction',
        'controller' => '\\Haruncpi\\LaravelSimpleFilemanager\\Controllers\\FilemanagerController@postAction',
        'namespace' => '\\Haruncpi\\LaravelSimpleFilemanager\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'filemanager.action_route',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message-localized' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message-localized',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ei673qTOGUsjiZqJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::ei673qTOGUsjiZqJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qTh30q9mlbYVxwjs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::qTh30q9mlbYVxwjs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H6pjj16T1WoKKaHX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => '\\App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => '\\App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::H6pjj16T1WoKKaHX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nZRNEowFVwtrhOzT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::nZRNEowFVwtrhOzT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k09rXNOq0z7Sikuh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::k09rXNOq0z7Sikuh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZWkvKlpcoM1yvbKp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::ZWkvKlpcoM1yvbKp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::47PWpSG4NwAHsMgX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/subscribers/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@exportSubscribers',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@exportSubscribers',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::47PWpSG4NwAHsMgX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WgqwL0OexYOtoUM7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/subscribers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@subscribers',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@subscribers',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WgqwL0OexYOtoUM7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gcx6qTmAzROLaSfs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/subscribers/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@deletesubsctiber',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@deletesubsctiber',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Gcx6qTmAzROLaSfs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'users.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0ekRcGmA52HPH7WW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::0ekRcGmA52HPH7WW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S4wiZqPZ8JeD19rM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/users/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::S4wiZqPZ8JeD19rM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F2qeq0MvFgxR0Iqi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::F2qeq0MvFgxR0Iqi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n3M7BrowNwDIo5Ew' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@show',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::n3M7BrowNwDIo5Ew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uLVw7Mi1N2mkk360' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users/logs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@logs',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@logs',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::uLVw7Mi1N2mkk360',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fnWziefMAnQyF1yh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::fnWziefMAnQyF1yh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'authentication.logs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users/{user}/authentication-logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@showAuthenticationLogs',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@showAuthenticationLogs',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'authentication.logs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tim5iR2WkaIkQsoH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::tim5iR2WkaIkQsoH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'asdasdsa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@editProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@editProfile',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'asdasdsa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tBjvfOhjh5dhOp1l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@updateProfile',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::tBjvfOhjh5dhOp1l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateProfile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/update_profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@updateProfile',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'updateProfile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forms.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/forms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FormController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FormController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'forms.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forms.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/forms/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FormController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FormController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'forms.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forms.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/forms/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FormController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FormController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'forms.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forms.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/forms/edit/{form}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FormController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FormController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'forms.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forms.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => '{locale?}/admin/forms/update/{form}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FormController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FormController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'forms.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forms.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '{locale?}/admin/forms/destroy/{form}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FormController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\FormController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'forms.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forms.destroy.formField' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/forms/destroy/{formField}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FormController@destroyFormField',
        'controller' => 'App\\Http\\Controllers\\Admin\\FormController@destroyFormField',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'forms.destroy.formField',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EzmsQxM5wJ9fLfTL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/forms/arrange',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FormController@arrange',
        'controller' => 'App\\Http\\Controllers\\Admin\\FormController@arrange',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::EzmsQxM5wJ9fLfTL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'image.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/upload/image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UploadFilesController@uploadImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\UploadFilesController@uploadImage',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'image.upload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'image.del' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/upload/image/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UploadFilesController@deleteImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\UploadFilesController@deleteImage',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'image.del',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'image.clear' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/upload/image/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UploadFilesController@clearChache',
        'controller' => 'App\\Http\\Controllers\\Admin\\UploadFilesController@clearChache',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'image.clear',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/banners/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'banner.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/banners/{type}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'banner.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/banners/{type}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'banner.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/banners/{banner}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'banner.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/banners/{banner}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'banner.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/banners/{banner}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'banner.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'section.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/sections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'section.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j9te22tozVh5uog0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/sections/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::j9te22tozVh5uog0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G17b8eZdopfSPj44' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/sections/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::G17b8eZdopfSPj44',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'section.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/sections/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'section.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zNdk82XKeP3RQWRk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/sections/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zNdk82XKeP3RQWRk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ifOU84FCiMdPmvMc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/sections/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ifOU84FCiMdPmvMc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5c41sIWC2bECZJSL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/sections/arrange',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@arrange',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@arrange',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::5c41sIWC2bECZJSL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/section/{sec}/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/section/{section_id}/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/section/{section_id}/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/section/posts/{post}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/section/posts/{post}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/section/posts/{post}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.deletefiles' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '{locale?}/admin/section/posts/{post}/file/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator|Content Manager',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@deletefiles',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@deletefiles',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.deletefiles',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dIQEGLnf0bxrOiYg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/submissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::dIQEGLnf0bxrOiYg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E19MsAYEXuAvb0N0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/submission/{submission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionController@show',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::E19MsAYEXuAvb0N0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tDccqbN6MWMtpBAy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/submission/destroy/{submission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::tDccqbN6MWMtpBAy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/settings/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'settings.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/settings/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'settings.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directory.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/directories/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'directory.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directory.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/directories/{type}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'directory.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directory.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/directories/{type}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'directory.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directory.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/directories/{directory}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'directory.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directory.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/directories/{directory}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'directory.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directory.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/directories/{directory}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'directory.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8PsrKtraYI6G5z7s' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/directories/arrange',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@arrange',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@arrange',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::8PsrKtraYI6G5z7s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/languages/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'languages.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/languages/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'languages.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'components.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/components/{sec?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'components.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::loXN4wweQGhRgCH7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/component/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::loXN4wweQGhRgCH7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'component.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/component/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'component.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ImRTGVjkfPfah0RM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/component/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ImRTGVjkfPfah0RM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CVhuTnrS1JYuRhWR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/component/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::CVhuTnrS1JYuRhWR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mwg8eZUY8gfiI8GR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/component/{id}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mwg8eZUY8gfiI8GR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::py8Ms0KaDQRrXUjb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/component/arrange/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@arrange',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@arrange',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::py8Ms0KaDQRrXUjb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'componentPosts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/componentPosts/{component_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentPostsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentPostsController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'componentPosts.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6ern8ia9gQZ9ofjd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/componentPosts/create/{component_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentPostsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentPostsController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::6ern8ia9gQZ9ofjd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'component.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/componentPosts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentPostsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentPostsController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'component.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'componentable.sort' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/componentable/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentableController@sort',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentableController@sort',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'componentable.sort',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'componentable.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/componentable/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentableController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentableController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'componentable.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'componanatable.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/componentable/create/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentableController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentableController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'componanatable.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'componanatable.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/componentable/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentableController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentableController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'componanatable.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'componanatable.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/componentable/edit/{componentable}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentableController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentableController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'componanatable.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'componanatable.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => '{locale?}/admin/componentable/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentableController@udpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentableController@udpdate',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'componanatable.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'componanatable.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/componentable/delete/{componentable}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'role:Administrator',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentableController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentableController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'componanatable.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'submission' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/submission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\PagesController@submission',
        'controller' => 'App\\Http\\Controllers\\Website\\PagesController@submission',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'submission',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscribe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\PagesController@subscribe',
        'controller' => 'App\\Http\\Controllers\\Website\\PagesController@subscribe',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'subscribe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{locale?}/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\SearchController@index',
        'controller' => 'App\\Http\\Controllers\\Website\\SearchController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DWGVdVotm1roR70I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{locale?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\HomePageController@homePage',
        'controller' => 'App\\Http\\Controllers\\Website\\HomePageController@homePage',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::DWGVdVotm1roR70I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UZr8wJYKyWGXoqLj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{locale?}/{all}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\RoutesController@index',
        'controller' => 'App\\Http\\Controllers\\Website\\RoutesController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::UZr8wJYKyWGXoqLj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'all' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pDjSzretdPOmBpOp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/front',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:270:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:52:"function () {
    return \\view(\'website.front\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000089f0000000000000000";}";s:4:"hash";s:44:"7i2eiYJ5m1ZoOjBQtYkzaiSKn+8M56a0a6gL/Wtbu14=";}}',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::pDjSzretdPOmBpOp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F4zYImw7jsT9lN1q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/photo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:270:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:52:"function () {
    return \\view(\'website.photo\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008a10000000000000000";}";s:4:"hash";s:44:"h3qLweYuScMPFqJv1ajyqI0HkrSkKqBZ2I5YdtC4avk=";}}',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::F4zYImw7jsT9lN1q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZYzZP3j3gXqmQFBx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:272:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:54:"function () {
    return \\view(\'website.contact\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008a30000000000000000";}";s:4:"hash";s:44:"F+FAV0vO4mRWrExxLBfilTK9kYiiCQeaGKFaR18zATk=";}}',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::ZYzZP3j3gXqmQFBx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HlEDnEB5LEbuUc7b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/text-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:274:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:56:"function () {
    return \\view(\'website.text-page\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008a50000000000000000";}";s:4:"hash";s:44:"u/v8m5mIC+q/bZv0MzCMGpDcvzROBfC8jEH2c+R+vD8=";}}',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::HlEDnEB5LEbuUc7b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U1wh5LSspi8mcbmO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/home-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:269:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:51:"function () {
    return \\view(\'website.home\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008a70000000000000000";}";s:4:"hash";s:44:"W/SH6X0VSrfeJgJH2J/pGqjc7BiUDXo7cf/tAVm/IoY=";}}',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::U1wh5LSspi8mcbmO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
