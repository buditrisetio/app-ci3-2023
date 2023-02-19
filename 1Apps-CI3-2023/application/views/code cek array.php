<?php if (is_array($tbljoin) && count($tbljoin) > 0): ?>
        <?php foreach($tbljoin as $row): ?>
        <tr>
            <td><?= $row->nama_pabrik ?></td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
    <p>Tidak ada data yang tersedia.</p>
    <?php endif; ?>