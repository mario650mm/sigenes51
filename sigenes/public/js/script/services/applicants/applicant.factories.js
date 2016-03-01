/**
 * Created by taxque on 1/03/16.
 */

angular.module('Enes')
    .factory('applicantFactory', function (HOST, $http) {
        return{
            getAllApplicants : function(){
                return $http.get(HOST+'api/v1/applicants')
            },
            save : function(applicant){
                return $http.post(HOST+'api/v1/applicants', applicant)
            },
            update : function(applicant){
                return $http.put(HOST+'api/v1/applicants', applicant)
            },
            delete : function(applicant){
                return $http.delete(HOST+'api/v1/applicants/'+applicant.id)
            },
            show : function(id){
                return $http.get(HOST+'api/v1/applicants/'+id)
            },
            getDocuments : function(id){
                return $http.get(HOST+'api/v1/applicants/document/'+id)
            }
        }
    });