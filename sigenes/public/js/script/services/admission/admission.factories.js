/**
 * Created by taxque on 28/02/16.
 */
/**
 * Created by taxque on 27/02/16.
 */
angular.module('EnesAuth')
    .factory('admissionFactory', function (HOST, $http) {
        return{
            saveApplicant : function(applicant){
                return $http.post(HOST + 'api/v1/admissions', applicant)
            },
            createPdfAdmission : function(applicant_id){
                return $http.post(HOST + 'api/v1/admissions/createPdfAdmission/'+applicant_id)
            }
        }
    });