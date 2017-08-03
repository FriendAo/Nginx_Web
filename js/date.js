function createSelect(ActionFlag) { 
				var selYear = document.getElementById("tYEAR"); 
				var selMonth = document.getElementById("tMON"); 
				var selDay = document.getElementById("tDAY"); 
				var dt = new Date(); 

				if(ActionFlag == 1) { 
					MinYear = dt.getFullYear(); 
					MaxYear = dt.getFullYear()+5; 

					for(var i = MinYear; i <= MaxYear; i++) { 
						var op = document.createElement("OPTION"); 
						op.value = i; 
						op.innerHTML = i; 
						selYear.appendChild(op); 
					} 
					selYear.selectedIndex = 0; 

					for(var i = 1; i < 13; i++) { 
						var op = document.createElement("OPTION"); 
						op.value = i; 
						op.innerHTML = i; 
						selMonth.appendChild(op); 
					} 
					selMonth.selectedIndex = dt.getMonth(); 
				} 

				var date = new Date(selYear.value, selMonth.value, 0); 
				var daysInMonth = date.getDate(); 
				selDay.options.length = 0; 

				for(var i = 1; i <= daysInMonth ; i++) { 
					var op = document.createElement("OPTION"); 
					op.value = i; 
					op.innerHTML = i; 
					selDay.appendChild(op); 
				} 
				
				selDay.selectedIndex = dt.getDate() - 1; 
			} 