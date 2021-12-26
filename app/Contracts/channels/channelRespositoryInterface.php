<?php
namespace app\Contracts\channels;

interface channelRespositoryInterface

{

	public function getAll();

    public function find($id);

    public function create($request);

    public function update($request, $id);

    public function delete($id);


}

?>
