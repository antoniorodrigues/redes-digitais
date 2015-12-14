### MAKE R FILE ###
Graphic = {}
x_index = []
rate = []
health = []
duration = []

#Get data output file
file = open('output.cvs', 'r')
lines = file.readlines()

for line in lines:
    es = line.split(' ')
    if (int(es[0]) in x_index):
	    #Graphic["Test:"+len(Grafics)] = (x_index, rate, health, duration)
        x_index = []
        rate = []
        health = []
        duration = []

    if es[2] != '':
        x_index.append(int(es[0]))
        rate.append(float(es[1]))
        health.append(float(es[2]))
        duration.append(float(es[3]))
		
#Create data R file
data_r_file =  """
### Graphic generate ###\n
x_index <- c(%s)
rate <- c(%s)
health <- c(%s)
duration <- c(%s)

par(mfrow=c(2,2))
plot(x_index, rate,col="blue",type="l", xlab="time")
title(main = "Graphic 1: Rate/Request")

plot(x_index, health,col="red",type="l", xlab="time")
title(main = "Graphic 2: Health CPU/Request")

plot(x_index, duration,col="green",type="l", xlab="time")
title(main = "Graphic 3: Duration/Request")
""" %(str(x_index)[1:-1], str(rate)[1:-1], str(health)[1:-1], str(duration)[1:-1])

#Write file
out_file = open('antonio.R', 'w')

out_file.write(data_r_file)

#To run R file and generate graphics on pdf
#$ python generate_r.py
#$ Rscript output.R
#$ R CMD BATCH output.R
