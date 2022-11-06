import yaml

if __name__ == '__main__':
    stream = open("test.yaml", "r")

    dic = yaml.safe_load(stream)

    for key, value in dic.items():
        print(f"{key}: {value}")