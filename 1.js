function biodata ()
{
  var obj = {
    			name : "Abdel Julian B",
    			age:"21",
    			address : "Bandung, Jawa Barat ",
    			hobbies : ["Game", "Atletik", "Coding"],
    			is_married : false,
    			list_school : [{ highSchool : "SMK NEGERI 1 SUBANG"}, {year_in : "2013"}, {year_out : "2016"}, {major : "Computer And Network Engineerinng"}],
    			skills : [{skill_name : "Java", level : "Advanced"}, {skill_name : "PHP", level : "Advanced",}],
    			interest_in_coding: true
    	    };
  		return JSON.stringify(obj);
}
// Pemanggilan
var x = biodata();
alert(x);