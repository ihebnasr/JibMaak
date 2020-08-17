import 'package:flutter/material.dart';
import 'package:jibmaak/animation/FadeAnimation.dart';
import 'signup.dart';

void main() => runApp(MaterialApp(
      debugShowCheckedModeBanner: false,
      routes: <String, WidgetBuilder>{
        '/signup': (BuildContext context) => new SignupPage(),
      },
      home: HomePage(),
    ));

class HomePage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
        backgroundColor: Colors.white,
        body: SingleChildScrollView(
          child: Container(
            child: Column(
              children: <Widget>[
                Container(
                  height: 300,
                  decoration: BoxDecoration(
                      image: DecorationImage(
                          image: AssetImage('assets/images/background.png'),
                          fit: BoxFit.fill)),
                  child: Stack(
                    children: <Widget>[
                      Positioned(
                          left: 30,
                          width: 80,
                          height: 200,
                          /*child: FadeAnimation(
                            1,*/
                          child: Container(
                            decoration: BoxDecoration(
                                image: DecorationImage(
                                    image: AssetImage(
                                        'assets/images/light-1.png'))),
                          ) /*),*/
                          ),
                      Center(
                          child: Container(
                        width: 200,
                        height: 400,
                        decoration: BoxDecoration(
                          image: DecorationImage(
                            image: AssetImage('assets/images/aaaa.png'),
                          ),
                        ),
                      )),
                      Positioned(
                          right: 40,
                          top: 40,
                          width: 80,
                          height: 150,
                          /*child: FadeAnimation(
                            1.5,*/
                          child: Container(
                            decoration: BoxDecoration(
                                image: DecorationImage(
                                    image:
                                        AssetImage('assets/images/clock.png'))),
                          ) /*),*/
                          ),
                    ],
                  ),
                ),
                Padding(
                  padding: EdgeInsets.all(30.0),
                  child: Column(
                    children: <Widget>[
                      /*FadeAnimation(
                          1.8,*/
                      Container(
                        /*padding: EdgeInsets.all(5),
                        decoration: BoxDecoration(
                            color: Colors.white,
                            borderRadius: BorderRadius.circular(10),
                            boxShadow: [
                              BoxShadow(
                                  /*color: Color.fromRGBO(65, 105, 225, 1),*/
                                  blurRadius: 20.0,
                                  offset: Offset(0, 10))
                            ]),*/
                        child: Column(
                          children: <Widget>[
                            FadeAnimation(
                                Icon(Icons.person, color: Colors.white),
                                'Username'),
                            SizedBox(
                              height: 10.0,
                            ),
                            FadeAnimation(Icon(Icons.lock, color: Colors.white),
                                'Password'),

                            /* Container(
                                  padding: EdgeInsets.all(8.0),
                                  decoration: BoxDecoration(
                                      border: Border(
                                          bottom: BorderSide(
                                              color: Colors.grey[100]))),
                                  child: TextField(
                                    decoration: InputDecoration(
                                        border: InputBorder.none,
                                        hintText: "Email or Phone number",
                                        hintStyle:
                                            TextStyle(color: Colors.grey[400])),
                                  ),
                                ),*/
                            /* Container(
                                  padding: EdgeInsets.all(8.0),
                                  child: TextField(
                                    decoration: InputDecoration(
                                        border: InputBorder.none,
                                        hintText: "Password",
                                        hintStyle:
                                            TextStyle(color: Colors.grey[400])),
                                  ),
                                )*/
                          ],
                        ),
                      ),
                      /*),*/
                      SizedBox(
                        height: 10,
                      ),
                      /* FadeAnimation(
                          1.5,*/
                      Text(
                        " Forgot Password?",
                        style: TextStyle(
                            color: Color.fromRGBO(65, 105, 225, 1),
                            fontWeight: FontWeight.bold,
                            fontFamily: 'Montserrat',
                            decoration: TextDecoration.underline),
                      ),
                      SizedBox(
                        height: 20,
                      ),
                      /* FadeAnimation(
                          2,*/
                      Container(
                        width: 150,
                        child: RaisedButton(
                          onPressed: () {},
                          color: Color.fromRGBO(65, 105, 225, 1),
                          textColor: Colors.white,
                          shape: RoundedRectangleBorder(
                              borderRadius:
                                  BorderRadius.all(Radius.circular(10.0))),
                          child: Text(
                            'Login',
                            style: TextStyle(fontSize: 20.0),

                            /*height: 50,
                        decoration: BoxDecoration(
                            borderRadius: BorderRadius.circular(10),
                            gradient: LinearGradient(colors: [
                              Color.fromRGBO(143, 148, 251, 2),
                              Color.fromRGBO(143, 148, 251, .20),
                            ])),
                        child: Center(
                          child: Text(
                            "Login",
                            style: TextStyle(
                                color: Colors.white,
                                fontWeight: FontWeight.bold),
                          ),
                        ),*/
                          ),
                        ),
                      ),
                      SizedBox(height: 20),
                      /*Row(
                        mainAxisAlignment: MainAxisAlignment.center,
                        children: <Widget>[
                          Text(
                            "Don't have an Account? ",
                            style: TextStyle(
                                color: Color.fromRGBO(65, 105, 225, 1)),
                          ),
                          SizedBox(width: 5.0),*/
                      InkWell(
                        onTap: () {
                          Navigator.of(context).pushNamed('/signup');
                        },
                        child: Text(
                          'Don' 't have an Account? Sign Up',
                          style: TextStyle(
                              color: Color.fromRGBO(65, 105, 225, 1),
                              fontWeight: FontWeight.bold,
                              fontFamily: 'Montserrat',
                              decoration: TextDecoration.underline),
                        ),
                      ),
                    ],
                    /*),*/
                    /*),*/
                    /* ],*/
                  ),
                )
              ],
            ),
          ),
        ));
  }
}
