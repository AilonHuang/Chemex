<?php

namespace App\Admin\Actions\Grid\RowAction;

use App\Models\SoftwareRecord;
use App\Models\SoftwareTrack;
use Dcat\Admin\Actions\Response;
use Dcat\Admin\Admin;
use Dcat\Admin\Grid\RowAction;

class SoftwareDeleteAction extends RowAction
{
    /**
     * @return string
     */
    protected $title = '🔨 删除软件';

    /**
     * Handle the action request.
     *
     * @return Response
     */
    public function handle()
    {
        if (!Admin::user()->can('software.delete')) {
            return $this->response()
                ->error('你没有权限执行此操作！')
                ->refresh();
        }

        $software = SoftwareRecord::where('id', $this->getKey())->first();
        if (empty($software)) {
            return $this->response()
                ->alert()
                ->error('没有此软件记录！');
        }

        $software_tracks = SoftwareTrack::where('software_id', $software->id)
            ->get();

        foreach ($software_tracks as $software_track) {
            $software_track->delete();
        }

        $software->delete();

        return $this->response()
            ->alert()
            ->success('成功删除软件: ' . $software->name)
            ->refresh();
    }

    /**
     * @return string|array|void
     */
    public function confirm()
    {
        return ['确认删除？', '删除的同时将会解除所有与之关联的归属关系'];
    }
}
