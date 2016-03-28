'use strict';

/**
 * @ngdoc Controller
 * @name Enes.controller:periodAdminCtrl
 * @param periodFactory, Notification
 * @param $scope
 * @requires periodFactory, Notification
 * @description
 * # DeleteuserCtrl
 * Controller of the principalApp
 */

angular.module('Enes')
	.controller('subjectmatterAdminCtrl',function($scope, mainFactory, subjectmatterFactory, careerFactory, studyareaFactory, Notification){
		$scope.selectCareer   = [];
		$scope.selectArea	  = [];
		$scope.dataarea		  = [];
		$scope.showarea		  = false;
		$scope.subjectmatter  = {};
		$scope.half_year	  = {};
		$scope.years 		  = {};
		$scope.filtersemester = [{}];
		$scope.iscomun_deep	  = false;
		$scope.isdeepending   = false;
		$scope.datatableView  = [{}];
		$scope.objects 		  = {};
		$scope.area 		  = {};
		$scope.career 		  = {};
		$scope.plan 		  = {};


		// Fileds for search in user model
		$scope.availableSearchParams = [
			{ key: "key", name: "Clave", placeholder: "Clave..." },
      		{ key: "name", name: "Asignatura", placeholder: "Nombre de la asignatura..." },
      		{ key: "credit", name: "Creditos", placeholder: "Creditos..." },
      		{ key: "career", name: "Carrera", placeholder: "Nombre de la carrera..." },
      		{ key: "plan", name: "Plan", placeholder: "Plan de estudio..." }
    	];

		$scope.init = function(){
			getCareer();
			getArea();
			getHalf_year();
			getYears();
			$scope.showarea = false;
			
		};


		var getHalf_year = function(){
			mainFactory.getHalf_years()
			.success(function(data){
				$scope.half_year = data;
			})
			.error(function(error){
				console.log(error);
			});
		};

		var getArea = function(){
			studyareaFactory.getInfo()
			.success(function(data){
				$scope.selectArea = data;
			})
			.error(function(error){

			});
		};

		var getCareer = function(){
			careerFactory.getInfo()
			.success(function(data){
				$scope.selectCareer = data;
			})
			.error(function(error){

			});
		};

		var getYears = function(){
			mainFactory.get_years()
			.success(function(data){
				$scope.years = data;
			});
		}

		$scope.filterArea = function(paramInt){
			$scope.dataarea	= [];
			angular.forEach($scope.selectArea, function(value, key){
				if (value.career_id == paramInt) {
					$scope.dataarea.push(value);
				};
			});
		};

		$scope.filtersemes = function(paramInt){
			$scope.filtersemester = [{}];
			angular.forEach($scope.half_year, function(value, key){
				if (value.year_id == paramInt) {
					$scope.filtersemester.push(value);
				};
			})
		}

		$scope.change = function(){
			$scope.showarea = true;
		};

		$scope.changeComun = function(){
			$scope.showarea = false;
		};

		$scope.register = function(){
			if(typeof($scope.subjectmatter.hours_clinic) != 'undefined'){
				$scope.subjectmatter.hours_total = $scope.subjectmatter.hours_teoric + $scope.subjectmatter.hours_practique + $scope.subjectmatter.hours_clinic;
			}else{
				$scope.subjectmatter.hours_total = $scope.subjectmatter.hours_teoric + $scope.subjectmatter.hours_practique + 0;
			}

			if (typeof($scope.subjectmatter.isasmandatory) == 'undefined') {
				$scope.subjectmatter.isasmandatory = false;
			};
			if (typeof($scope.subjectmatter.isasopctional) == 'undefined') {
				$scope.subjectmatter.isasopctional = false;
			};
			if (typeof($scope.subjectmatter.isasopctionaltrans) == 'undefined') {
				$scope.subjectmatter.isasopctionaltrans = false;
			};
			if (typeof($scope.subjectmatter.issermandatory) == 'undefined') {
				$scope.subjectmatter.issermandatory = false;
			};
			if (typeof($scope.subjectmatter.isserindicative) == 'undefined') {
				$scope.subjectmatter.isserindicative = false;
			};
			if (typeof($scope.subjectmatter.istechnique) == 'undefined') {
				$scope.subjectmatter.istechnique = false;
			};
			
			$scope.subjectmatter.week_total = $scope.subjectmatter.week_end - $scope.subjectmatter.week_init;
			subjectmatterFactory.save($scope.subjectmatter)
			.success(function(data){
				if(data.created == true){
					Notification.success({
						title: '<i class="fa fa-info-circle"></i> Creación de la asignatura',
						message: 'Se agrego correctamente la asignatura capturada.', 
						delay: 5000
					});
					setTimeout('document.location.reload()',3000);
				}
			})
			.error(function(error){
				$scope.error = "";
                angular.forEach(error.errors,function(value){
                    $scope.error += value + "</br>";
                });
                Notification.error({
                    message: '<b>Error</b> </br>'+$scope.error,
                    title: '<u>Error al agregar la asignatura.</u>',
                    delay: 10000
                });
			});
		}

		///////////////////// datatableView ///////////////////////
		$scope.objectoarr = {};
		$scope.getInfo = function(){
			subjectmatterFactory.getInfo()
			.success(function(data){
				$scope.objects 			= data.subjectMatter;
				$scope.area 			= data.areas;
				$scope.career 			= data.career;
				$scope.plan 			= data.plan;
				angular.forEach($scope.objects, function(value, key){
					$scope.objectoarr.entity = value;
					$scope.objectoarr.id = value.id;
					$scope.objectoarr.key = value.key;
					$scope.objectoarr.credit = value.credit;
					$scope.objectoarr.name = value.name;
					angular.forEach($scope.career, function(values){
						if (value.career_id== values.id) {
							$scope.objectoarr.career = values.name;
							angular.forEach($scope.plan, function(v){
								if(values.study_plan_id == v.id){
									$scope.objectoarr.tronco = 0;
									$scope.objectoarr.plan = v.name;
								}
							})
						};
					});
					if (value.study_area_id != null) {
						angular.forEach($scope.area, function(val){
							if(value.study_area_id == val.id){
								angular.forEach($scope.plan, function(va){
									if (val.study_plan_id == va.id) {
										$scope.objectoarr.deep = 1;
										$scope.objectoarr.plan = va.name;
									};
								});
							}
						});
					};
					$scope.datatableView.push($scope.objectoarr);
					$scope.objectoarr={};
				});
				$scope.datatableView.splice(0,1);
				
			})
			.error(function(error){
				$scope.error = "";
                angular.forEach(error.errors,function(value){
                    $scope.error += value + "</br>";
                });
                Notification.error({
                    message: '<b>Error</b> </br>'+$scope.error,
                    title: '<u>Error al traer la información.</u>',
                    delay: 10000
                });
			});
		};

		$scope.showedit = function(entity, deep, tronco){
			getCareer();
			getArea();
			getHalf_year();
			$scope.filtersemester =$scope.half_year;
			getYears();
			$scope.subjectmatter = entity;
			if(typeof(tronco) != 'undefined'){$scope.iscomun_deep = true;}
			if(typeof(deep) != 'undefined'){$scope.isdeepending = true;}
			$('#edit').modal('show');
		};

		$scope.editAction = function(){
			subjectmatterFactory.update($scope.subjectmatter)
			.success(function(data){
				Notification.success({
					title: '<i class="fa fa-info-circle"></i> Actualización de la asignatura',
					message: 'Se actualizó correctamente la asignatura capturada.', 
					delay: 5000
				});
				setTimeout('document.location.reload()',3000);
			})
			.error(function(error){
				$scope.error = "";
                angular.forEach(error.errors,function(value){
                    $scope.error += value + "</br>";
                });
                Notification.error({
                    message: '<b>Error</b> </br>'+$scope.error,
                    title: '<u>Error al actualizar la asignatura.</u>',
                    delay: 10000
                });
			});
		}

		$scope.showdelete = function(entity){
			$scope.subjectmatter = entity;
			$('#delete').modal('show');
		};

		$scope.deleteaction = function(id){
			subjectmatterFactory.delete(id)
			.success(function(data){
				Notification.success({
					title: '<i class="fa fa-info-circle"></i> Eliminación de la asignatura',
					message: 'Se elimino correctamente la asignatura capturada.', 
					delay: 5000
				});
				setTimeout('document.location.reload()',3000);
			})
			.error(function(error){
				$scope.error = "";
                angular.forEach(error.errors,function(value){
                    $scope.error += value + "</br>";
                });
                Notification.error({
                    message: '<b>Error</b> </br>'+$scope.error,
                    title: '<u>Error al eliminar la asignatura.</u>',
                    delay: 10000
                });
			});
		}

	})
	.directive('stringToNumber', function() {
		return {
			require: 'ngModel',
			link: function(scope, element, attrs, ngModel) {
				ngModel.$parsers.push(function(value) {
					return '' + value;
				});
				ngModel.$formatters.push(function(value) {
					return parseFloat(value, 10);
				});
			}
		};
	});
