from flask import Flask
from markupsafe import escape
from flask import url_for


app = Flask(__name__)

from flask import render_template

@app.route('/')
def homepage():
    return render_template('home.html', title=None)

@app.route('/cv')
def cvpage():
    return render_template('cv.html', title=None)


if __name__ == "__main__":
    app.run(host='0.0.0.0')
