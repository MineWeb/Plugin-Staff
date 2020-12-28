<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-large btn-block btn-success" href="<?= $this->Html->url(array('controller' => 'staff', 'action' => 'add', 'admin' => true, 'plugin' => 'staff')) ?>"><?= $Lang->get('STAFF__ADD_STAFF'); ?></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title"><?= $Lang->get('STAFF__LIST'); ?></h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered dataTable">
                        <thead>
                        <tr>
                            <th><?= $Lang->get('GLOBAL__NAME') ?></th>
                            <th><?= $Lang->get('STAFF__ORDER'); ?></th>
                            <th class="right"><?= $Lang->get('GLOBAL__ACTIONS') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($staffs as $staff): ?>
                                <tr>
                                    <td><?= $staff['StaffListing']['username'] ?></td>
                                    <td><?= $staff['StaffListing']['order']; ?></td>
                                    <td class="right">
                                        <a href="<?= $this->Html->url(array('controller' => 'staff', 'action' => 'edit/'.$staff['StaffListing']['id'], 'admin' => true, 'plugin' => 'staff')) ?>" class="btn btn-info"><?= $Lang->get('GLOBAL__EDIT') ?></a>
                                        <a onClick="confirmDel('<?= $this->Html->url(array('controller' => 'staff', 'action' => 'delete/'.$staff['StaffListing']['id'], 'admin' => true, 'plugin' => 'staff')) ?>')" class="btn btn-danger"><?= $Lang->get('GLOBAL__DELETE') ?></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
