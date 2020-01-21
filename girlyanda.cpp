#include "stdafx.h"
#include "stdlib.h"
#include "locale.h"

using namespace std;

#define ARRAYSIZE 100

void zapolnenie(int size, int *p_array);
void vivod(int size, int *p_array);

int main()
{
	setlocale(LC_ALL, "Rus");
	int size, array[ARRAYSIZE], *p_array = &array[0];
	printf("Введите размер массива\n");
	scanf_s("%d", &size);
	zapolnenie(size, p_array);
	vivod(size, p_array);
	system ("pause");
    return 0;
}

void zapolnenie(int size, int *p_array)
{
	int i, j, number, line = 0;
	for (i = 0; i < (size*size);++i)
		p_array[i] = 0;
	for (number = 1, j = 0;number <= (size*size);)
	{
		for (i = line;j >= line;i++, j--)
			p_array[i*size + j] = number++;
		if (i >= size)
		{
			i = size-1;
			line++;
		}
		for (j = line;i >= line;i--, j++)
			p_array[i*size + j] = number++;
		if (j >= size)
		{	
			j = size-1;
			line++;
		}
	}
}

void vivod(int size, int *p_array)
{
	for (int i = 0, j = 1;i < (size*size);++i)
	{
		printf("%d\t", p_array[i]);
		if (j < size)
		{
			j++;
		}
		else
		{
			printf("\n");
			j = 1;
		}
	}
}
