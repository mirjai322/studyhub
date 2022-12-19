const validation = new JustValidate("#signup"); //using JustValidate library

validation
	.addField("#name", [ //name input is required
		{
			rule: "required" //name of rule = value
		}
	])
	.addField("#email", [ //2 requirements for email input:
		{
			rule: "required" //it is required
		},
		{
			rule: "email" //must be valid email
		},
		{
			validator: (value) => () => {
				return fetch("validate-email.php?email=" + 
				encodeURIComponent(value))//returns promise object
						.then(function(response) {
							return response.json(); //returns promise object, call that
						})
						.then(function(json){
							return json.available;
						});
			},
			errorMessage: "email already taken"
		}
	])
	.addField("#password",[
		{
			rule: "required"
		},
		{
			rule: "password" //must contain 8 letters, >=1 letter, >=1 number
		}
	])
	/*
	.addField("#password_confirmation",[
		{
			//value of input being validated and array of other fields in form
			validator: (value, fields) => { //custom validation rule w/ validator property
				return value === fields["#password"].elem.value; 
			},
			errorMessage: "Passwords should match" //custom error message property
		}
	])
	*/
	.onSuccess((event) => {
		document.getElementById("signup").submit();//perform submit method on signup form
	});