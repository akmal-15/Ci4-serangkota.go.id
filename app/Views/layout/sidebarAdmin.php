<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php
        // MENGAMBIL DATA DARI ARRAY MENU DENGAN PARENT_ID = 0
        $menuFilter = array_filter($menu, function ($var) {
            return ($var['parent_id'] == 0);
        });
        ?>
        <?php foreach ($menuFilter as $row) : ?>
            <?php
            $link = url_title($row['title'], '-');
            $link = strtolower($link);
            ?>
            <?php if ($row['sub_menu'] == 'Y') : ?>
                <li class="nav-item has-treeview">
                    <a href="<?= base_url('/admin/' . $link) ?>" class="nav-link">
                        <i class="nav-icon fas <?= $row['class'] ?>"></i>
                        <p><?= $row['title'] ?>
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <?php
                    // MENGAMBIL DATA DARI ARRAY MENU KE DALAM SUB MENU
                    $id = $row['id'];
                    $submenuFilter = array_filter($menu, function ($var) use ($id) {
                        return ($var['parent_id'] == $id);
                    });
                    $sublink = url_title($row['title'], '-');
                    $sublink = strtolower($sublink);
                    ?>
                    <?php foreach ($submenuFilter as $sub) : ?>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('/admin/' . $sublink) ?>" class="nav-link">
                                    <i class="far  <?= $sub['class'] ?> nav-icon"></i>
                                    <p><?= $sub['title'] ?></p>
                                </a>
                            </li>
                        </ul>
                    <?php endforeach; ?>
                </li>
            <?php else : ?>
                <li class="nav-item">
                    <a href="<?= base_url('/admin/' . $link) ?>" class="nav-link">
                        <i class="nav-icon fas <?= $row['class'] ?>"></i>
                        <p>
                            <?= $row['title'] ?>
                        </p>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</nav>