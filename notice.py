
from flask import Flask,send_from_directory
import os

app = Flask(__name__)


@app.route('/downloads')
def tos():
    workingdir = os.path.abspath(os.getcwd())
    filepath = workingdir + '/'
    return send_from_directory(filepath, 'march_notice.pdf')


if __name__ == '__main__':

	app.run()
	debug=True
