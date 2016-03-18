'use strict';

/**
 * @ngdoc Controller
 * @name Enes.controller:registerAspirantController
 * @param suspensionFactory
 * @param $scope
 * @requires suspensionFactory
 * @description
 * # DeleteuserCtrl
 * Controller of the principalApp
 */

angular.module('Enes')
	.controller('careerAdminCtrl', function($scope, careerFactory, studyareaFactory, Notification){
		$scope.btnstudyarea = false;
		$scope.btncareer 	= true;
		$scope.panelCarrera = true;
		$scope.panelArea 	= false;
		$scope.career 		= {};
		$scope.area 		= {};
		$scope.selectArea 	= [{}];
		$scope.datacareer	= [];
		$scope.dataarea		= [];
		$scope.allAreas		= [];

		// Fileds for search in user model
		$scope.availableSearchParams = [
			{ key: "campus", name: "Campus", placeholder: "Campus..." },
			{ key: "key", name: "Key", placeholder: "Key..." },
			{ key: "name", name: "Name of Career", placeholder: "Name of Career..." },
			{ key: "description", name: "Description", placeholder: "Description..." }
		];


		$scope.agregar = function(){
			$scope.career.father_campus = 600;
			careerFactory.save($scope.career)
			.success(function(data){
				if (data.created==true) {
					$scope.area.career_id = data.career_id;
					$scope.panelCarrera = false;
					$scope.panelArea 	= true;
					$scope.btnstudyarea = true;
					$scope.btncareer 	= false;
					Notification.success({
						title: '<i class="fa fa-info-circle"></i> Registro efectuado',
						message: '<div align="justify">La carrera se registro con exito, favor de agregar las áreas de estudio correspondientes.</div>',
						delay: 5000
					});
				};
			})
			.error(function(error){
				$scope.error = "";
				angular.forEach(error.errors,function(value){
					$scope.error += value + "</br>";
				})
				Notification.error({
					message: '<b>Error</b> </br>'+$scope.error,
					title: '<i class="fa fa-exclamation-triangle"></i> <u>Error al crear la carrera</u>',
					delay: 10000
				});
			});
		}

		$scope.registrararea = function(){
			studyareaFactory.save($scope.area)
			.success(function(data){
				$scope.selectArea.push(data);
				Notification.success({
					title: '<i class="fa fa-info-circle"></i> Registro efectuado',
					message: '<div align="justify">La carrera se registro con exito, <br>favor de agregar las áreas de estudio correspondientes.</div>',
					delay: 5000
				});
			})
			.error(function(error){
				$scope.error = "";
				angular.forEach(error.errors,function(value){
					$scope.error += value + "</br>";
				})
				Notification.error({
					message: '<b>Error</b> </br>'+$scope.error,
					title: '<i class="fa fa-exclamation-triangle"></i> <u>Error al crear la carrera</u>',
					delay: 10000
				});
			});
		}

		$scope.getCareer = function(){
			careerFactory.getInfo()
			.success(function(data){
				$scope.datacareer = data;
				getArea();
			})
			.error(function(error){

			});
		}

		var getArea = function(){
			studyareaFactory.getInfo()
			.success(function(data){
				$scope.allAreas = data;
			})
		}

		$scope.filtroArea = function(paramInt){
			$scope.dataarea	= [];
			angular.forEach($scope.allAreas, function(value, key){
				if (value.career_id == paramInt) {
					$scope.dataarea.push(value);
				};
			});
		}

		$scope.editCareer = function(entity){
			$scope.career = entity;
			$('#editcareer').modal('show');
		}

		$scope.updatecareer = function(){
			careerFactory.update($scope.career)
			.success(function(data){
				if(data.updated ==true){
					Notification.success({
						title: '<i class="fa fa-info-circle"></i> Modificación efectuada correctamente.',
						message: '<div align="justify">La carrera, ' + $scope.career.name + ', se ha actualizado con exito. <br>Se recargará la pagina para que pueda notar los cambios.</div>',
						delay: 5000
					});
					setTimeout('document.location.reload()',3000);
				}
			})
			.error(function(error){
				$scope.error = "";
				angular.forEach(error.errors,function(value){
					$scope.error += value + "</br>";
				})
				Notification.error({
					message: '<b>¡¡¡Error!!!</b> </br>'+$scope.error,
					title: '<i class="fa fa-exclamation-triangle"></i> <u>Error al actualizar la carrera ' + $scope.career.name + '</u>',
					delay: 10000
				});
			})
		}

		$scope.deleteCareer = function(entity){
			$scope.career = entity;
			$('#deletecareer').modal('show');
		}

		$scope.actiondelete = function(id){
			careerFactory.delete(id)
			.success(function(data){
				Notification.success({
					title: '<i class="fa fa-info-circle"></i> Eliminación efectuada correctamente.',
					message: '<div align="justify">La carrera, ' + $scope.career.name + ', se ha eliminado con exito. <br>Se recargará la pagina para que pueda notar los cambios.</div>',
					delay: 5000
				});
				setTimeout('document.location.reload()',3000);
			})
			.error(function(error){
				Notification.error({
					message: '<b>¡¡¡Error!!!</b> </br>',
					title: '<i class="fa fa-exclamation-triangle"></i> <u>Error al eliminar la carrera ' + $scope.career.name + '</u>',
					delay: 10000
				});
			});
		}

		$scope.editArea = function(entity){
			$scope.area = entity;
			$('#editarea').modal('show');
		}

		$scope.updatearea = function(){
			studyareaFactory.update($scope.area)
			.success(function(data){
				if(data.updated ==true){
					Notification.success({
						title: '<i class="fa fa-info-circle"></i> Modificación efectuada correctamente.',
						message: '<div align="justify">La área, ' + $scope.area.name + ', se ha actualizado con exito. <br>Se recargará la pagina para que pueda notar los cambios.</div>',
						delay: 5000
					});
					setTimeout('document.location.reload()',3000);
				}
			})
			.error(function(error){
				$scope.error = "";
				angular.forEach(error.errors,function(value){
					$scope.error += value + "</br>";
				})
				Notification.error({
					message: '<b>¡¡¡Error!!!</b> </br>'+$scope.error,
					title: '<i class="fa fa-exclamation-triangle"></i> <u>Error al actualizar la carrera ' + $scope.area.name + '</u>',
					delay: 10000
				});
			})
		}

		$scope.deleteArea = function(entity){
			$scope.area = entity;
			$('#deletearea').modal('show');
		}

		$scope.actiondeletearea = function(id){
			studyareaFactory.delete(id)
			.success(function(data){
				Notification.success({
					title: '<i class="fa fa-info-circle"></i> Eliminación efectuada correctamente.',
					message: '<div align="justify">La área, ' + $scope.area.name + ', se ha eliminado con exito. <br>Se recargará la pagina para que pueda notar los cambios.</div>',
					delay: 5000
				});
				setTimeout('document.location.reload()',3000);
			})
			.error(function(error){
				Notification.error({
					message: 'Error al eliminar el área ' + $scope.area.name + '</br>',
					title: '<i class="fa fa-exclamation-triangle"></i> <u><b>¡¡¡Error!!!</b></u>',
					delay: 10000
				});
			});
		}
	});