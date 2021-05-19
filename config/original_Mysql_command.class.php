<?php

namespace config;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

class original_Mysql_command
{
    public static function customer_data_update($table)
    {
        foreach ($_POST as $key => $value) {
            $key_value[] = $key . ' = ' . '"' . $value . '"' . ',';
        }
        $key_value = rtrim(implode($key_value), ',');
        $ses = $_SESSION['customer_id'];
        $sql = "UPDATE " . $table . " SET " . $key_value . " WHERE id =" . $ses . ';';
        return $sql;
    }
    public static function POST_DATA_INSERT($table)
    {
        foreach ($_POST as $key => $value) {
            $k[] = '`'.$key.'`' . ', ';
            $value = str_replace('"',"'",$value);
            $v[] = '"' . $value . '", ';
        }
        $k = (rtrim(implode($k), ', '));
        $v = rtrim(implode($v), ', "');

        if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
            // 成功;
            $file_name = date('YmdHis') . "_" . $_FILES["image"]["name"];
            if (pathinfo($file_name, PATHINFO_EXTENSION) == 'jpg' || pathinfo($file_name, PATHINFO_EXTENSION) == 'png' || pathinfo($file_name, PATHINFO_EXTENSION) == 'webp') {
                // 拡張子チェックOK
                $tmp_name = $_FILES["image"]["tmp_name"];
                $document_root = $_SERVER['DOCUMENT_ROOT'];
                if (move_uploaded_file($tmp_name, $document_root . "/shopping/image/" . $table . "/" . $file_name)) {
                    // "アップロード完了,画像保存先のディレクトリは、DBのテーブル名と同じとする"
                    $dbh = database::dbh();
                    $sql = "INSERT INTO $table ( `image`, " . $k . " ) VALUES ( " . '"' . $file_name . '"' . ", " . $v .'"'.",NOW());";
                    $stmt = $dbh->prepare($sql);

                    $stmt->execute();

                    header("refresh:3;url=" . Bootstrap::ADMIN_URL);

                    template_twig_files::Prepare_the_template();
                    $context[''] = '';
                    $template = $GLOBALS['twig']->loadTemplate($GLOBALS['this_dir'] . $GLOBALS['filename'] . "complete.html.twig");
                    $template->display($context);
                } else {
                    echo "画像をアップロードできません。";
                    exit;
                }

            } else {
                echo "ファイル形式はjpg/png/webpのみです";
                exit;
            }

        } else {
            echo "アップロードに失敗しました";
            exit;
        }
    }
    public static function POST_DATA_UPDATE($table)
    {
        foreach ($_POST as $key => $value) {
            if ($key == 'id') {
                continue;
            } else {
              $value = $value = str_replace('"',"'",$value);
                $k[] = $key . '=' . '"' . $value . '"' . ", ";
            }
        }
        $sql = (rtrim(implode($k), ', '));

        if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
            // 成功;
            $file_name = date('YmdHis') . "_" . $_FILES["image"]["name"];
            if (pathinfo($file_name, PATHINFO_EXTENSION) == 'jpg' || pathinfo($file_name, PATHINFO_EXTENSION) == 'png' || pathinfo($file_name, PATHINFO_EXTENSION) == 'webp') {
                // 拡張子チェックOK
                $tmp_name = $_FILES["image"]["tmp_name"];
                if (move_uploaded_file($tmp_name, $GLOBALS['document_root'] . "/shopping/image/" . $table . "/" . $file_name)) {
                    // "アップロード完了"
                    $dbh = database::dbh();
                    $file_name = htmlspecialchars($file_name);
                    $delete_id = intval($_POST['id']);
                    //画像更新の前に古い画像データの削除
                    $old_image_delete_sql = 'SELECT image FROM ' . $table . ' WHERE ' . $table . '.id=' . $delete_id;
                    $old_image_file = $dbh->query($old_image_delete_sql);
                    $old_image_file = $old_image_file->fetch()['image'];
                    $image_dir = $GLOBALS['document_root'] . '/shopping/image/' . $table . '/';
                    file_exists($image_dir . $old_image_file) ?
                    unlink($image_dir . $old_image_file) :
                    '';
                    $stmt = $dbh->prepare("UPDATE ".$table." SET " . $sql .", last_update= NOW(), image=" . "'" . $file_name . "'" . " WHERE " . $table . ".id=" . $delete_id);

                    $stmt->execute();
                    header("refresh:3;url=" . Bootstrap::ADMIN_URL);
                    template_twig_files::Prepare_the_template();
                    $context[''] = '';
                    $template = $GLOBALS['twig']->loadTemplate($GLOBALS['this_dir'] . $GLOBALS['filename'] . "complete.html.twig");
                    $template->display($context);
                } else {
                    echo "画像をアップロードできません。";
                    exit;
                }
            } else {
                echo "ファイル形式はjpg/pngのみです";
                exit;
            }
        } else {
            echo "アップロードに失敗しました";
            exit;
        }
        database::dbh();
    }
    public static function search_data_and_paging($table, $column,$paging=10)
    {
        global $search, $pages, $prev, $page, $next;
        $get_column = isset($_GET[$column]) ? htmlspecialchars($_GET[$column], ENT_QUOTES, 'utf-8') : '';
        $dbh = database::dbh();
        $rows = $paging;

        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = $rows * ($page - 1);
        if ($get_column == '') {
            $all_rows = $dbh->query("SELECT COUNT(*) FROM " . $table . "")->fetchColumn();

        } else {
            $all_rows_stmt = $dbh->prepare("SELECT * FROM " . $table . " WHERE " . $column . " like :search");
            $all_rows_stmt->bindValue(":search", '%' . $get_column . '%');
            $all_rows_stmt->execute();
            $all_rows = $all_rows_stmt->rowCount();
        }

        if (($all_rows % $rows) <= 0) {
            $pages = (int) ($all_rows / $rows);
        } else {
            $pages = (int) ($all_rows / $rows) + 1;
        }
        $next = ($page + 1 > $pages) ? '' : $page + 1;
        $prev = ($page - 1 < 0) ? '' : $page - 1;
        if ($get_column == '') {
            $stmt = $dbh->prepare("SELECT * FROM " . $table . " limit :offset,:rows");
        } else {
            $stmt = $dbh->prepare("SELECT * FROM " . $table . " WHERE " . $column . " like :search limit :offset,:rows");
            $stmt->bindValue(":search", '%' . $get_column . '%');
        }
        $stmt->bindParam(":offset", $offset, \PDO::PARAM_INT);
        $stmt->bindParam(":rows", $rows, \PDO::PARAM_INT);
        $stmt->execute();
        $search = $stmt->fetchAll(\PDO::FETCH_ASSOC);
      }
    }