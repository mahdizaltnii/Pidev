<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/index' => [[['_route' => 'admin/index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/Users' => [[['_route' => 'admin/Users', '_controller' => 'App\\Controller\\AdminController::list_users'], null, ['GET' => 0], null, false, false, null]],
        '/admin/Teams' => [[['_route' => 'admin/Teams', '_controller' => 'App\\Controller\\AdminController::list_teams'], null, null, null, false, false, null]],
        '/admin/AddTeam' => [[['_route' => 'admin/AddTeam', '_controller' => 'App\\Controller\\AdminController::list_addteam'], null, null, null, false, false, null]],
        '/admin/UsersPDF' => [[['_route' => 'UsersPDF', '_controller' => 'App\\Controller\\AdminController::UsersPDF'], null, null, null, false, false, null]],
        '/user/AllUsers' => [[['_route' => 'AllUsers', '_controller' => 'App\\Controller\\AdminController::All_users'], null, null, null, false, false, null]],
        '/lesusers' => [[['_route' => 'userss', '_controller' => 'App\\Controller\\AdminController::afficherpostsjson'], null, null, null, true, false, null]],
        '/user/ajTeam' => [[['_route' => 'delUser', '_controller' => 'App\\Controller\\AdminController::adTeam'], null, null, null, false, false, null]],
        '/user/allTeam' => [[['_route' => 'allTeam', '_controller' => 'App\\Controller\\AdminController::All_teams'], null, null, null, false, false, null]],
        '/back/annoncesCat/list' => [[['_route' => 'listannoncesCat', '_controller' => 'App\\Controller\\AnnonceCatController::listAnnoncesCat'], null, null, null, false, false, null]],
        '/back/annoncesCat/add' => [[['_route' => 'addAnnonceCat', '_controller' => 'App\\Controller\\AnnonceCatController::addAnnonceCat'], null, null, null, false, false, null]],
        '/back/annonces/list' => [[['_route' => 'listannonces', '_controller' => 'App\\Controller\\AnnonceController::listAnnoncesB'], null, null, null, false, false, null]],
        '/annonces/add' => [[['_route' => 'ajoutAnnonce', '_controller' => 'App\\Controller\\AnnonceController::addAnnonce'], null, null, null, false, false, null]],
        '/annonces' => [[['_route' => 'listAnnoncesF', '_controller' => 'App\\Controller\\AnnonceController::listAnnoncesF'], null, null, null, false, false, null]],
        '/liste' => [[['_route' => 'annonesJ', '_controller' => 'App\\Controller\\AnnonceController::allAnnonces'], null, null, null, false, false, null]],
        '/admin/badwords' => [[['_route' => 'app_bad_words_index', '_controller' => 'App\\Controller\\BadWordsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/badwords/new' => [[['_route' => 'app_bad_words_new', '_controller' => 'App\\Controller\\BadWordsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/blog' => [
            [['_route' => 'posts_index', '_controller' => 'App\\Controller\\BlogController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
            [['_route' => 'blog', '_controller' => 'App\\Controller\\TestController::Forum'], null, null, null, false, false, null],
        ],
        '/blog/add' => [[['_route' => 'comments_new', '_controller' => 'App\\Controller\\BlogController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/blog/addpost' => [[['_route' => 'ajoutpost', '_controller' => 'App\\Controller\\BlogController::ajoutpost'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comment/CommentbyidsJSON' => [[['_route' => 'commentby', '_controller' => 'App\\Controller\\BlogController::Allcomments'], null, null, null, true, false, null]],
        '/Allposts' => [[['_route' => 'afficher_toutposts', '_controller' => 'App\\Controller\\BlogController::afficherposts'], null, null, null, false, false, null]],
        '/CommentbyidsJSON' => [[['_route' => 'commentbyid', '_controller' => 'App\\Controller\\BlogController::commentsbyID'], null, null, null, true, false, null]],
        '/postjson' => [[['_route' => 'postjson', '_controller' => 'App\\Controller\\BlogController::afficherpostsjson'], null, null, null, true, false, null]],
        '/detailpostjs' => [[['_route' => 'detail_articlejs', '_controller' => 'App\\Controller\\BlogController::detailpostAction'], null, null, null, false, false, null]],
        '/detailcommentjs' => [[['_route' => 'detail_commentjs', '_controller' => 'App\\Controller\\BlogController::detailcommentAction'], null, null, null, false, false, null]],
        '/ajoutCJson/new' => [[['_route' => 'ajoutJsonComment', '_controller' => 'App\\Controller\\BlogController::AjoutJComments'], null, null, null, true, false, null]],
        '/ajoutJson/new' => [[['_route' => 'ajoutJsonPost', '_controller' => 'App\\Controller\\BlogController::AjoutJPosts'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => ''."\n".'     * ', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie/categorie/add3' => [[['_route' => 'add_categorie', '_controller' => 'App\\Controller\\CategorieController::addcategorie'], null, null, null, false, false, null]],
        '/categorie/categorie/deletecategorie' => [[['_route' => 'delete_categorie', '_controller' => 'App\\Controller\\CategorieController::deleteCategorieAction'], null, null, null, false, false, null]],
        '/categorie/categorie/liste2' => [[['_route' => 'liste_categorie', '_controller' => 'App\\Controller\\CategorieController::getCategorie'], null, null, null, false, false, null]],
        '/admin/comments' => [[['_route' => 'list_comments', '_controller' => 'App\\Controller\\CommentsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/comments/ajout' => [[['_route' => 'ajout_comments', '_controller' => 'App\\Controller\\CommentsController::ajout'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/event' => [[['_route' => 'event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/event/listevenement' => [[['_route' => 'evenement_pdf', '_controller' => 'App\\Controller\\EventController::listpdf'], null, ['GET' => 0], null, false, false, null]],
        '/event/DESCr' => [[['_route' => 'DESCr', '_controller' => 'App\\Controller\\EventController::TrierParNomr'], null, null, null, false, false, null]],
        '/event/ASCr' => [[['_route' => 'ASCr', '_controller' => 'App\\Controller\\EventController::TrierParNomdesr'], null, null, null, false, false, null]],
        '/event/new' => [[['_route' => 'event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/event/showFront' => [[['_route' => 'event_show_front', '_controller' => 'App\\Controller\\EventController::readFront'], null, null, null, false, false, null]],
        '/event/event/add3' => [[['_route' => 'add_event', '_controller' => 'App\\Controller\\EventController::AddEvent'], null, null, null, false, false, null]],
        '/event/event/deleteevent' => [[['_route' => 'delete_event', '_controller' => 'App\\Controller\\EventController::deleteEventAction'], null, null, null, false, false, null]],
        '/event/event/liste2' => [[['_route' => 'liste_event', '_controller' => 'App\\Controller\\EventController::getEvent'], null, null, null, false, false, null]],
        '/messages' => [[['_route' => 'app_messages', '_controller' => 'App\\Controller\\MessagesController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/posts' => [[['_route' => 'list_posts', '_controller' => 'App\\Controller\\PostsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/posts/ajout' => [[['_route' => 'ajout_posts', '_controller' => 'App\\Controller\\PostsController::ajout'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/decroissant' => [[['_route' => 'decroissant', '_controller' => 'App\\Controller\\ReclamationController::TrierParNomr'], null, null, null, false, false, null]],
        '/reclamation/croissant' => [[['_route' => 'croissant', '_controller' => 'App\\Controller\\ReclamationController::TrierParNomdesr'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/back' => [[['_route' => 'reclamation_index2', '_controller' => 'App\\Controller\\ReclamationController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/reclamation/add3' => [[['_route' => 'add_reclamation', '_controller' => 'App\\Controller\\ReclamationController::addreclamation'], null, null, null, false, false, null]],
        '/reclamation/reclamation/deletereclamation' => [[['_route' => 'delete_reclamation', '_controller' => 'App\\Controller\\ReclamationController::deleteReclamationAction'], null, null, null, false, false, null]],
        '/reclamation/reclamation/liste2' => [[['_route' => 'liste_reclamation', '_controller' => 'App\\Controller\\ReclamationController::getReclamation'], null, null, null, false, false, null]],
        '/reponse' => [[['_route' => 'reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reponse/new' => [[['_route' => 'reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reponse/reponse/add3' => [[['_route' => 'add_reponse', '_controller' => 'App\\Controller\\ReponseController::AddReponse'], null, null, null, false, false, null]],
        '/reponse/reponse/deletereponse' => [[['_route' => 'delete_reponse', '_controller' => 'App\\Controller\\ReponseController::deleteReponseAction'], null, null, null, false, false, null]],
        '/reponse/reponse/liste2' => [[['_route' => 'liste_reponse', '_controller' => 'App\\Controller\\ReponseController::getReponse'], null, null, null, false, false, null]],
        '/statistique' => [[['_route' => 'statistique', '_controller' => 'App\\Controller\\StatistiqueController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'Home', '_controller' => 'App\\Controller\\TestController::Home'], null, null, null, false, false, null]],
        '/Marketplace' => [[['_route' => 'Marketplace', '_controller' => 'App\\Controller\\TestController::Marketplace'], null, null, null, false, false, null]],
        '/Annoces' => [[['_route' => 'Annoces', '_controller' => 'App\\Controller\\TestController::Annoces'], null, null, null, false, false, null]],
        '/Events' => [[['_route' => 'Events', '_controller' => 'App\\Controller\\TestController::Events'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/listUsers' => [[['_route' => 'listUsers', '_controller' => 'App\\Controller\\TestController::listUsers'], null, null, null, false, false, null]],
        '/addProduct' => [[['_route' => 'ddProduct', '_controller' => 'App\\Controller\\TestController::addProduct'], null, null, null, false, false, null]],
        '/listProduct' => [[['_route' => 'listProduct', '_controller' => 'App\\Controller\\TestController::listProduct'], null, null, null, false, false, null]],
        '/posts' => [[['_route' => 'posts', '_controller' => 'App\\Controller\\TestController::posts'], null, null, null, false, false, null]],
        '/comments' => [[['_route' => 'comments', '_controller' => 'App\\Controller\\TestController::comments'], null, null, null, false, false, null]],
        '/showAnnouncement' => [[['_route' => 'showAnnouncement', '_controller' => 'App\\Controller\\TestController::showAnnouncement'], null, null, null, false, false, null]],
        '/addAnnouncement' => [[['_route' => 'addAnnouncement', '_controller' => 'App\\Controller\\TestController::addAnnouncement'], null, null, null, false, false, null]],
        '/showEvent' => [[['_route' => 'showEvent', '_controller' => 'App\\Controller\\TestController::showEvent'], null, null, null, false, false, null]],
        '/addEvent' => [[['_route' => 'addEvent', '_controller' => 'App\\Controller\\TestController::addEvent'], null, null, null, false, false, null]],
        '/user/registration' => [[['_route' => 'user/registration', '_controller' => 'App\\Controller\\UserController::registration'], null, null, null, false, false, null]],
        '/user/connexion' => [[['_route' => 'login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
        '/user/quitTeams' => [[['_route' => 'QuitTeam', '_controller' => 'App\\Controller\\UserController::QuitTeam'], null, null, null, false, false, null]],
        '/user/Teams' => [[['_route' => 'user/Teams', '_controller' => 'App\\Controller\\UserController::list_teams'], null, null, null, false, false, null]],
        '/user/signup' => [[['_route' => 'signup', '_controller' => 'App\\Controller\\UserController::signupAction'], null, null, null, false, false, null]],
        '/user/signin' => [[['_route' => 'signin', '_controller' => 'App\\Controller\\UserController::signinAction'], null, null, null, false, false, null]],
        '/user/editUser' => [[['_route' => 'editUser', '_controller' => 'App\\Controller\\UserController::edituser'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|delete(?'
                            .'|User/([^/]++)(*:204)'
                            .'|Team/([^/]++)(*:225)'
                        .')'
                        .'|badwords/([^/]++)(?'
                            .'|(*:254)'
                            .'|/edit(*:267)'
                            .'|(*:275)'
                        .')'
                    .')'
                    .'|nnonces/(?'
                        .'|show([^/]++)(*:308)'
                        .'|edit([^/]++)(*:328)'
                        .'|delete/([^/]++)(*:351)'
                    .')'
                .')'
                .'|/user/delTeam/([^/]++)(*:383)'
                .'|/back/annonces(?'
                    .'|Cat/(?'
                        .'|delete/([^/]++)(*:430)'
                        .'|edit([^/]++)(*:450)'
                    .')'
                    .'|/(?'
                        .'|delete/([^/]++)(*:478)'
                        .'|edit([^/]++)(*:498)'
                    .')'
                .')'
                .'|/detail(?'
                    .'|/([^/]++)(*:527)'
                    .'|s/([^/]++)(*:545)'
                .')'
                .'|/([^/]++)/(?'
                    .'|edit(?'
                        .'|(*:574)'
                        .'|C(*:583)'
                    .')'
                    .'|delete(*:598)'
                .')'
                .'|/supprimer/([^/]++)(*:626)'
                .'|/post(?'
                    .'|/([^/]++)/like(*:656)'
                    .'|byidsJSON/([^/]++)(*:682)'
                .')'
                .'|/r(?'
                    .'|ating/([^/]++)/([^/]++)(*:719)'
                    .'|e(?'
                        .'|clamation/(?'
                            .'|([^/]++)(*:752)'
                            .'|back/([^/]++)(*:773)'
                            .'|([^/]++)(?'
                                .'|/edit(*:797)'
                                .'|(*:805)'
                            .')'
                            .'|back/([^/]++)(*:827)'
                            .'|newreponse/([^/]++)(*:854)'
                            .'|order1/([^/]++)(*:877)'
                            .'|reclamation/updatereclamation/([^/]++)(*:923)'
                        .')'
                        .'|ponse/(?'
                            .'|([^/]++)(?'
                                .'|(*:952)'
                                .'|/edit(*:965)'
                                .'|(*:973)'
                            .')'
                            .'|reponse/updatereponse/([^/]++)(*:1012)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|ommentsbyidpost/([^/]++)(*:1053)'
                    .'|ategorie/(?'
                        .'|([^/]++)(?'
                            .'|(*:1085)'
                            .'|/edit(*:1099)'
                            .'|(*:1108)'
                        .')'
                        .'|categorie/updatecategorie/([^/]++)(*:1152)'
                    .')'
                .')'
                .'|/u(?'
                    .'|pdate(?'
                        .'|CJson/([^/]++)(*:1190)'
                        .'|postJson/([^/]++)(*:1216)'
                    .')'
                    .'|ser/(?'
                        .'|userbyidsJSON/([^/]++)(*:1255)'
                        .'|activation/([^/]++)(*:1283)'
                        .'|Teams/([^/]++)(*:1306)'
                    .')'
                .')'
                .'|/delete(?'
                    .'|CJson/([^/]++)(*:1341)'
                    .'|postJson/([^/]++)(*:1367)'
                .')'
                .'|/admin/(?'
                    .'|comments/(?'
                        .'|([^/]++)(*:1407)'
                        .'|modifier/([^/]++)(*:1433)'
                        .'|supprimer/([^/]++)(*:1460)'
                    .')'
                    .'|posts/(?'
                        .'|([^/]++)(*:1487)'
                        .'|modifier/([^/]++)(*:1513)'
                        .'|supprimer/([^/]++)(*:1540)'
                    .')'
                .')'
                .'|/event/(?'
                    .'|([^/]++)(?'
                        .'|(*:1572)'
                        .'|/edit(*:1586)'
                        .'|(*:1595)'
                    .')'
                    .'|search1/([^/]++)(*:1621)'
                    .'|event/updateevent/([^/]++)(*:1656)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        204 => [[['_route' => 'deleteUser', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, true, null]],
        225 => [[['_route' => 'deleteTeam', '_controller' => 'App\\Controller\\AdminController::deleteTeam'], ['id'], null, null, false, true, null]],
        254 => [[['_route' => 'app_bad_words_show', '_controller' => 'App\\Controller\\BadWordsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        267 => [[['_route' => 'app_bad_words_edit', '_controller' => 'App\\Controller\\BadWordsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        275 => [[['_route' => 'app_bad_words_delete', '_controller' => 'App\\Controller\\BadWordsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        308 => [[['_route' => 'annonce_show', '_controller' => 'App\\Controller\\AnnonceController::showAnnonce'], ['id'], null, null, false, true, null]],
        328 => [[['_route' => 'edit_annonce', '_controller' => 'App\\Controller\\AnnonceController::editAnnonce'], ['id'], null, null, false, true, null]],
        351 => [[['_route' => 'delete_annonce', '_controller' => 'App\\Controller\\AnnonceController::deleteAnnonceF'], ['id'], null, null, false, true, null]],
        383 => [[['_route' => 'delTeamm', '_controller' => 'App\\Controller\\AdminController::delTeam'], ['id'], null, null, false, true, null]],
        430 => [[['_route' => 'delete_annonceCatB', '_controller' => 'App\\Controller\\AnnonceCatController::deleteAnnonceCat'], ['id'], null, null, false, true, null]],
        450 => [[['_route' => 'editB_annonceCat', '_controller' => 'App\\Controller\\AnnonceCatController::editAnnonceCatB'], ['id'], null, null, false, true, null]],
        478 => [[['_route' => 'delete_annonceB', '_controller' => 'App\\Controller\\AnnonceController::deleteAnnonce'], ['id'], null, null, false, true, null]],
        498 => [[['_route' => 'editB_annonce', '_controller' => 'App\\Controller\\AnnonceController::editAnnonceB'], ['id'], null, null, false, true, null]],
        527 => [[['_route' => 'afficher_posts', '_controller' => 'App\\Controller\\BlogController::affiche'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        545 => [[['_route' => 'afficher_commentaires', '_controller' => 'App\\Controller\\BlogController::getCommentaires'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        574 => [[['_route' => 'posts_edit', '_controller' => 'App\\Controller\\BlogController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        583 => [[['_route' => 'comments_edit', '_controller' => 'App\\Controller\\BlogController::editCommentaire'], ['id'], null, null, false, false, null]],
        598 => [[['_route' => 'posts_delete', '_controller' => 'App\\Controller\\BlogController::delete'], ['id'], null, null, false, false, null]],
        626 => [[['_route' => 'commentsdelete', '_controller' => 'App\\Controller\\BlogController::deleteComment'], ['id'], null, null, false, true, null]],
        656 => [[['_route' => 'post_like', '_controller' => 'App\\Controller\\BlogController::like'], ['id'], null, null, false, false, null]],
        682 => [[['_route' => 'postbyid', '_controller' => 'App\\Controller\\BlogController::postssbyID'], ['id'], null, null, false, true, null]],
        719 => [[['_route' => 'add_rating', '_controller' => 'App\\Controller\\BlogController::addRating'], ['id', 'nbr'], null, null, false, true, null]],
        752 => [[['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        773 => [[['_route' => 'reclamation_show_back', '_controller' => 'App\\Controller\\ReclamationController::show2'], ['id'], ['GET' => 0], null, false, true, null]],
        797 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        805 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        827 => [[['_route' => 'reclamation_delete_back', '_controller' => 'App\\Controller\\ReclamationController::delete2'], ['id'], ['POST' => 0], null, false, true, null]],
        854 => [[['_route' => 'reponse_new2', '_controller' => 'App\\Controller\\ReclamationController::newreponse'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        877 => [[['_route' => 'order', '_controller' => 'App\\Controller\\ReclamationController::index3'], ['searchString'], null, null, false, true, null]],
        923 => [[['_route' => 'update_reclamation', '_controller' => 'App\\Controller\\ReclamationController::modifierReclamationAction'], ['id'], null, null, false, true, null]],
        952 => [[['_route' => 'reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        965 => [[['_route' => 'reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        973 => [[['_route' => 'reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1012 => [[['_route' => 'update_reponse', '_controller' => 'App\\Controller\\ReponseController::modifierReponseAction'], ['id'], null, null, false, true, null]],
        1053 => [[['_route' => 'commentbypost', '_controller' => 'App\\Controller\\BlogController::commentsbyidpost'], ['id'], null, null, false, true, null]],
        1085 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1099 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1108 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1152 => [[['_route' => 'update_categorie', '_controller' => 'App\\Controller\\CategorieController::modifierCategorieAction'], ['id'], null, null, false, true, null]],
        1190 => [[['_route' => 'updateJsonComment', '_controller' => 'App\\Controller\\BlogController::updateJComments'], ['id'], null, null, false, true, null]],
        1216 => [[['_route' => 'updateJsonPost', '_controller' => 'App\\Controller\\BlogController::updateJPosts'], ['id'], null, null, false, true, null]],
        1255 => [[['_route' => 'usersby', '_controller' => 'App\\Controller\\TestController::Allusers'], ['id'], null, null, false, true, null]],
        1283 => [[['_route' => 'activation', '_controller' => 'App\\Controller\\UserController::activation'], ['token'], null, null, false, true, null]],
        1306 => [[['_route' => 'JoinTeam', '_controller' => 'App\\Controller\\UserController::JoinTeam'], ['id'], null, null, false, true, null]],
        1341 => [[['_route' => 'deleteComment', '_controller' => 'App\\Controller\\BlogController::deleteJComments'], ['id'], null, null, false, true, null]],
        1367 => [[['_route' => 'deleteJsonComment', '_controller' => 'App\\Controller\\BlogController::deleteJpost'], ['id'], null, null, false, true, null]],
        1407 => [[['_route' => 'voir_comments', '_controller' => 'App\\Controller\\CommentsController::voir'], ['id'], ['GET' => 0], null, false, true, null]],
        1433 => [[['_route' => 'modifier_comments', '_controller' => 'App\\Controller\\CommentsController::modifier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1460 => [[['_route' => 'supprimer_comments', '_controller' => 'App\\Controller\\CommentsController::delete'], ['id'], null, null, false, true, null]],
        1487 => [[['_route' => 'voir_posts', '_controller' => 'App\\Controller\\PostsController::voir'], ['id'], ['GET' => 0], null, false, true, null]],
        1513 => [[['_route' => 'modifier_posts', '_controller' => 'App\\Controller\\PostsController::modifier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1540 => [[['_route' => 'supprimer_posts', '_controller' => 'App\\Controller\\PostsController::delete'], ['id'], null, null, false, true, null]],
        1572 => [[['_route' => 'event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1586 => [[['_route' => 'event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1595 => [[['_route' => 'event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1621 => [[['_route' => 'search', '_controller' => 'App\\Controller\\EventController::searchEnt'], ['searchString'], null, null, false, true, null]],
        1656 => [
            [['_route' => 'update_event', '_controller' => 'App\\Controller\\EventController::modifierEventAction'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
