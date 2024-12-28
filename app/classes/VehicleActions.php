<?php

// interface implemented for ensuring methods implementation

interface VehicleActions {
   public function addVehicle($data);
   public function editVehicle($id, $data);
   public function deleteVehicle($id);
   public function getVehicles();
}