<?php

use PhpParser\Node\Stmt\ElseIf_;
use PhpParser\Node\Stmt\Switch_;
use Psy\CodeCleaner\IssetPass;

    if(Isset($_GET["page"])){
        $page = $_GET["page"];
    } else {
        $page = "";
    }


    Switch ($page) {
        case "":
            case "dashboard":
                include "pages/dashboard.php";
                break;
                case "bagian":
                    include "pages/bagian.php";
                    break;
            default:
                include "pages/404.php";
    }

?>