var mark=prompt('Enter Your Mark');

if(mark>=0 && mark<33){
    document.write("Grade F");
}else if(mark>=33 && mark<40){
    document.write("Grade D");
}else if(mark>=40 && mark<50){
    document.write("Grade C");
}else if(mark>=50 && mark<60){
    document.write("Grade B");
}else if(mark>=60 && mark<70){
    document.write("Grade A-");
}else if(mark>=70 && mark<80){
    document.write("Grade A");
}else if(mark>=80 && mark<=100){
    document.write("Grade A+");
}else{
    document.write('invalid input');
}