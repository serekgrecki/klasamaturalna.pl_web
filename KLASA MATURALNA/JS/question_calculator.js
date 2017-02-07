function Select()
            {
            var points = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32];
            var ExamTime = document.getElementById("cmbStartTime").value;
            var currArray = [];
            switch(ExamTime) {
                case "9":
                    currArray = points.slice(0, 28);
                    break;
                case "10":
                    currArray = points.slice(3, 31);
                    break;
                case "11":
                    currArray = points.slice(6, 32);
                    break;
                case "12":
                    currArray = points.slice(9, 32);
                    break;
                case "13":
                    currArray = points.slice(12, 32);
                    break;
                case "14":
                    currArray = points.slice(15, 32);
                    break;
                case "15":
                    currArray = points.slice(18, 32);
                    break;
                case "16":
                    currArray = points.slice(21, 32);
                    break; 
                case "17":
                    currArray = points.slice(24, 32);
                    break;
                case "18":
                    currArray = points.slice(27, 32);
                    break;
            }
            var numer = document.getElementById("cmbNumberOnList").value;
            var currentGroup = [];
            var arrayToReturn = [];
            var x = 0;
                
           switch(true)
                {
                    case(parseInt(numer) < 6):
		              currentGroup = currArray.slice(0, 7);
		              break;
	                case(parseInt(numer) >= 6 && parseInt(numer) < 11):
                      currentGroup = currArray.slice(7, 14);
		              break;
	                case(parseInt(numer)>=11 && parseInt(numer) < 16):
		              currentGroup = currArray.slice(14, 21);
		              break;
	                case(parseInt(numer)>=16):
		              currentGroup = currArray.slice(21, 28);
		              break;
                }
                switch(parseInt(numer)%5)
                    {
	                   case(0):
                            x = 0;
		                    break;
	                   case(1):
		                    x = 4;
		                    break;
	                   case(2):
                            x = 3;
		                    break;
                        case(3):
		                    x = 2;
		                    break;
	                    case(4):
		                    x = 1;
                            break;
                    }
                var i = 0;
                for(i; i < currentGroup.length - x; i++)
                    {
                      arrayToReturn.push(currentGroup[i]);
                    }
            document.getElementById("alert").style.visibility = "visible";
            document.getElementById("alert").innerHTML = arrayToReturn.join(",");           
            }