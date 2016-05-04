/*
******************************************
                        字符串函数扩充                                 
******************************************
*/

/*
===========================================
//去除左边的指定字符
===========================================
*/

String.prototype.ltrimchar = function(chr) {
    var rvalue =this;
    var leftchar=this.left(1);
    if(leftchar==chr)
    {
        rvalue=this.right(this.length-1);
    }
    return rvalue;
}
///*
//===========================================
////去除右边的指定字符
//===========================================
//*/

String.prototype.rtrimchar = function(chr) {
    var rvalue =this;
    var rightchar=this.right(1);
    if(rightchar==chr)
    {
        rvalue=this.left(this.length-1);
    }
    return rvalue;
}


/*
===========================================
//去除左边的空格
===========================================

*/
String.prototype.ltrim = function()
{
        return this.replace(/(^\s*)/g, "");
}


/*
===========================================
//去除右边的空格
===========================================
*/
String.prototype.rtrim = function()
{
        return this.replace(/(\s*$)/g, "");
}


/*
===========================================
//去除前后空格
===========================================
*/
String.prototype.trim = function()
{
    return this.replace(/(^\s*)|(\s*$)/g, "");  
}

/*
===========================================
//得到左边的字符串
===========================================
*/
String.prototype.left = function(len)
{

        if(isNaN(len)||len==null)
        {
                len = this.length;
        }
        else
        {
                if(parseInt(len)<0||parseInt(len)>this.length)
                {
                        len = this.length;
                }
        }
        
        return this.substr(0,len);
}


/*
===========================================
//得到右边的字符串
===========================================
*/
String.prototype.right = function(len)
{

        if(isNaN(len)||len==null)
        {
                len = this.length;
        }
        else
        {
                if(parseInt(len)<0||parseInt(len)>this.length)
                {
                        len = this.length;
                }
        }
        
        return this.substring(this.length-len,this.length);
}


/*
===========================================
//得到中间的字符串,注意从0开始
===========================================
*/
String.prototype.mid = function(start,len)
{
        return this.substr(start,len);
}


/*
===========================================
//在字符串里查找另一字符串:位置从0开始
===========================================
*/
String.prototype.inStr = function(str)
{

        if(str==null)
        {
                str = "";
        }
        
        return this.indexOf(str);
}

/*
===========================================
//在字符串里反向查找另一字符串:位置0开始
===========================================
*/
String.prototype.inStrRev = function(str)
{

        if(str==null)
        {
                str = "";
        }
        
        return this.lastIndexOf(str);
}

/*
===========================================
//计算字符串打印长度
===========================================
*/
String.prototype.lengthW = function()
{
        return this.replace(/[^\x00-\xff]/g,"**").length;
}

/*
===========================================
//将字符串替换给指定字符串
===========================================
*/
String.prototype.replaceallchar = function(chrold,chrnew) {
    var temp=this;
    while(temp.indexOf(chrold)>=0)
    {
        temp = temp.replace(chrold,chrnew);
    }
    
    return temp;
}
 


