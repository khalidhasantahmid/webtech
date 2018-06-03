#include <windows.h>  // for MS Windows
#include <GL/glut.h>  // GLUT, include glu.h and gl.h

/* Handler for window-repaint event. Call back when the window first appears and
whenever the window needs to be re-painted. */
void display() {
	glClearColor(1.0f, 1.0f, 1.0f, 1.0f); // Set background color to black and opaque
	glClear(GL_COLOR_BUFFER_BIT);         // Clear the color buffer (background)

	glBegin(GL_POLYGON);     // Each set of 4 vertices form a quad

	glColor3ub(249, 57, 27); // flag color 1
	glVertex2f(0.8f, 0.8f);
	glVertex2f(0.8f, 0.9f);
	glVertex2f(-0.4f, 0.9f);    // x, y
	glVertex2f(-0.4f, 0.8f);

	glEnd();
	//-----------------------------------------------------------------------
	glBegin(GL_POLYGON);     // Each set of 4 vertices form a quad

	glColor3ub(242, 136, 31); // flag color 2
	glVertex2f(0.8f, 0.7f);
	glVertex2f(0.8f, 0.8f);
	glVertex2f(-0.4f, 0.8f);    // x, y
	glVertex2f(-0.4f, 0.7f);

	glEnd();
	//-----------------------------------------------------------------------
	glBegin(GL_POLYGON);     // Each set of 4 vertices form a quad

	glColor3ub(255, 251, 35); // flag color 3
	glVertex2f(0.8f, 0.6f);
	glVertex2f(0.8f, 0.7f);
	glVertex2f(-0.4f, 0.7f);    // x, y
	glVertex2f(-0.4f, 0.6f);

	glEnd();
	//-----------------------------------------------------------------------
	glBegin(GL_POLYGON);     // Each set of 4 vertices form a quad

	glColor3ub(44, 173, 5); // flag color 4
	glVertex2f(0.8f, 0.5f);
	glVertex2f(0.8f, 0.6f);
	glVertex2f(-0.4f, 0.6f);    // x, y
	glVertex2f(-0.4f, 0.5f);

	glEnd();
	//-----------------------------------------------------------------------
	glBegin(GL_POLYGON);     // Each set of 4 vertices form a quad

	glColor3ub(40, 31, 209); // flag color 5
	glVertex2f(0.8f, 0.4f);
	glVertex2f(0.8f, 0.5f);
	glVertex2f(-0.4f, 0.5f);    // x, y
	glVertex2f(-0.4f, 0.4f);

	glEnd();
	//-----------------------------------------------------------------------
	glBegin(GL_POLYGON);     // Each set of 4 vertices form a quad

	glColor3ub(108, 10, 206); // flag color 6
	glVertex2f(0.8f, 0.3f);
	glVertex2f(0.8f, 0.4f);
	glVertex2f(-0.4f, 0.4f);    // x, y
	glVertex2f(-0.4f, 0.3f);

	glEnd();
	//-----------------------------------------------------------------------
	glBegin(GL_POLYGON);     // Each set of 4 vertices form a quad

	glColor3ub(158, 45, 196); // flag color 7
	glVertex2f(0.8f, 0.2f);
	glVertex2f(0.8f, 0.3f);
	glVertex2f(-0.4f, 0.3f);    // x, y
	glVertex2f(-0.4f, 0.2f);

	glEnd();
	//-----------------------------------------------------------------------
	glBegin(GL_POLYGON);     // Each set of 4 vertices form a quad

	glColor3ub(11, 11, 12); // Stand
	glVertex2f(-0.25f, -0.8f);
	glVertex2f(-0.25f, -0.6f);
	glVertex2f(-0.6f, -0.6f);    // x, y
	glVertex2f(-0.6f, -0.8f);

	glEnd();
	//-----------------------------------------------------------------------
	glBegin(GL_POLYGON);     // Each set of 4 vertices form a quad

	glColor3ub(158, 00, 10); // steel
	glVertex2f(-0.4f, -0.6f);
	glVertex2f(-0.4f, 0.9f);
	glVertex2f(-0.45f, 0.9f);    // x, y
	glVertex2f(-0.45f, -0.6f);

	glEnd();
    //-----------------------------------------------------------------------

	glFlush();  // Render now
}

/* Main function: GLUT runs as a console application starting at main()  */
int main(int argc, char** argv) {
	glutInit(&argc, argv);                 // Initialize GLUT
	glutCreateWindow("Rainbow Flag"); // Create a window with the given title
	glutInitWindowSize(320, 320);   // Set the window's initial width & height
	glutDisplayFunc(display); // Register display callback handler for window re-paint
	glutMainLoop();           // Enter the event-processing loop
	return 0;
}

